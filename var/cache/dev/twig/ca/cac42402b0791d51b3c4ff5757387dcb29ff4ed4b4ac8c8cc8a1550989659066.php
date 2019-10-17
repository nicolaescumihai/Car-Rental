<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_7a56631aec9ecc9a55b7dfb35d6581121066a4fb4cae0634e626cb86147c0ba2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_2b72489d5ecb7a2ea207527299943d642b78f8b229079acff81a53799ee37415 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b72489d5ecb7a2ea207527299943d642b78f8b229079acff81a53799ee37415->enter($__internal_2b72489d5ecb7a2ea207527299943d642b78f8b229079acff81a53799ee37415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_f2bdd15aa206fd4c4af68882b9400f9f63a0b396f21078303e461dea7952f626 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2bdd15aa206fd4c4af68882b9400f9f63a0b396f21078303e461dea7952f626->enter($__internal_f2bdd15aa206fd4c4af68882b9400f9f63a0b396f21078303e461dea7952f626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b72489d5ecb7a2ea207527299943d642b78f8b229079acff81a53799ee37415->leave($__internal_2b72489d5ecb7a2ea207527299943d642b78f8b229079acff81a53799ee37415_prof);

        
        $__internal_f2bdd15aa206fd4c4af68882b9400f9f63a0b396f21078303e461dea7952f626->leave($__internal_f2bdd15aa206fd4c4af68882b9400f9f63a0b396f21078303e461dea7952f626_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c0f80bf87f551dcda789e4e0bce5419d3aa501235ae65c0fafddfeaf5e216cb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0f80bf87f551dcda789e4e0bce5419d3aa501235ae65c0fafddfeaf5e216cb6->enter($__internal_c0f80bf87f551dcda789e4e0bce5419d3aa501235ae65c0fafddfeaf5e216cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_53332dc564f0e6327a2c428f6a250c693403179538ff0c7ce975fe2a6672b29b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53332dc564f0e6327a2c428f6a250c693403179538ff0c7ce975fe2a6672b29b->enter($__internal_53332dc564f0e6327a2c428f6a250c693403179538ff0c7ce975fe2a6672b29b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_53332dc564f0e6327a2c428f6a250c693403179538ff0c7ce975fe2a6672b29b->leave($__internal_53332dc564f0e6327a2c428f6a250c693403179538ff0c7ce975fe2a6672b29b_prof);

        
        $__internal_c0f80bf87f551dcda789e4e0bce5419d3aa501235ae65c0fafddfeaf5e216cb6->leave($__internal_c0f80bf87f551dcda789e4e0bce5419d3aa501235ae65c0fafddfeaf5e216cb6_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8303c67376be015c8a8a3c544d0bf310e0fcb61391297135168c2429cbc2cbac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8303c67376be015c8a8a3c544d0bf310e0fcb61391297135168c2429cbc2cbac->enter($__internal_8303c67376be015c8a8a3c544d0bf310e0fcb61391297135168c2429cbc2cbac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d12b5e56f6365a9eafa6c1e900eca094dff5972da24e4c32d8a5c3ab42db58c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d12b5e56f6365a9eafa6c1e900eca094dff5972da24e4c32d8a5c3ab42db58c1->enter($__internal_d12b5e56f6365a9eafa6c1e900eca094dff5972da24e4c32d8a5c3ab42db58c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_d12b5e56f6365a9eafa6c1e900eca094dff5972da24e4c32d8a5c3ab42db58c1->leave($__internal_d12b5e56f6365a9eafa6c1e900eca094dff5972da24e4c32d8a5c3ab42db58c1_prof);

        
        $__internal_8303c67376be015c8a8a3c544d0bf310e0fcb61391297135168c2429cbc2cbac->leave($__internal_8303c67376be015c8a8a3c544d0bf310e0fcb61391297135168c2429cbc2cbac_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d2b8a007ef6f33b8d97b3c8f59ff61f32d7b614b2a87a4a29030e7d2cbb2ed28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2b8a007ef6f33b8d97b3c8f59ff61f32d7b614b2a87a4a29030e7d2cbb2ed28->enter($__internal_d2b8a007ef6f33b8d97b3c8f59ff61f32d7b614b2a87a4a29030e7d2cbb2ed28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8eb026dfe2b31ed15e4de1de11e44326551e401f6f40d3ea444b0ce566612b0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eb026dfe2b31ed15e4de1de11e44326551e401f6f40d3ea444b0ce566612b0d->enter($__internal_8eb026dfe2b31ed15e4de1de11e44326551e401f6f40d3ea444b0ce566612b0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_8eb026dfe2b31ed15e4de1de11e44326551e401f6f40d3ea444b0ce566612b0d->leave($__internal_8eb026dfe2b31ed15e4de1de11e44326551e401f6f40d3ea444b0ce566612b0d_prof);

        
        $__internal_d2b8a007ef6f33b8d97b3c8f59ff61f32d7b614b2a87a4a29030e7d2cbb2ed28->leave($__internal_d2b8a007ef6f33b8d97b3c8f59ff61f32d7b614b2a87a4a29030e7d2cbb2ed28_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/home/nicolaescu/Workspace/Car-Rental/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
