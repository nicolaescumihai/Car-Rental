<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_5cf7f5f7a9341b476c5a26bb488adf88dc03032b6ca7df8b1378e7eeab7fa8b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d0600403e8ad2d401bdaffeca781e9cf694a6060ae4ea75a9bacce29a7f219f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0600403e8ad2d401bdaffeca781e9cf694a6060ae4ea75a9bacce29a7f219f3->enter($__internal_d0600403e8ad2d401bdaffeca781e9cf694a6060ae4ea75a9bacce29a7f219f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_ef2addc6d2e99fc3212c64d177487b988499a2fc4922356ffc91c2003367fef2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef2addc6d2e99fc3212c64d177487b988499a2fc4922356ffc91c2003367fef2->enter($__internal_ef2addc6d2e99fc3212c64d177487b988499a2fc4922356ffc91c2003367fef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0600403e8ad2d401bdaffeca781e9cf694a6060ae4ea75a9bacce29a7f219f3->leave($__internal_d0600403e8ad2d401bdaffeca781e9cf694a6060ae4ea75a9bacce29a7f219f3_prof);

        
        $__internal_ef2addc6d2e99fc3212c64d177487b988499a2fc4922356ffc91c2003367fef2->leave($__internal_ef2addc6d2e99fc3212c64d177487b988499a2fc4922356ffc91c2003367fef2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_90f12ecd4c695488b9881561ddbdf33b1e8fe337c8541e3fafb4c6bb124ef78c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90f12ecd4c695488b9881561ddbdf33b1e8fe337c8541e3fafb4c6bb124ef78c->enter($__internal_90f12ecd4c695488b9881561ddbdf33b1e8fe337c8541e3fafb4c6bb124ef78c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b435e0cc18f8768c3e4c2a34f36ca628be81d3ae0c1856f04a5e09ebb2d81809 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b435e0cc18f8768c3e4c2a34f36ca628be81d3ae0c1856f04a5e09ebb2d81809->enter($__internal_b435e0cc18f8768c3e4c2a34f36ca628be81d3ae0c1856f04a5e09ebb2d81809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_b435e0cc18f8768c3e4c2a34f36ca628be81d3ae0c1856f04a5e09ebb2d81809->leave($__internal_b435e0cc18f8768c3e4c2a34f36ca628be81d3ae0c1856f04a5e09ebb2d81809_prof);

        
        $__internal_90f12ecd4c695488b9881561ddbdf33b1e8fe337c8541e3fafb4c6bb124ef78c->leave($__internal_90f12ecd4c695488b9881561ddbdf33b1e8fe337c8541e3fafb4c6bb124ef78c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/nicolaescu/Workspace/CarRental/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
