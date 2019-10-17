<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_993917c48ca918f86b830c3ddef5bb97c92f399305799a1bae14d5ef9da2bdc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_b5063fd7725d3670a9acb177aa1138aa8b41745af997a9cd22c191ba724156b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5063fd7725d3670a9acb177aa1138aa8b41745af997a9cd22c191ba724156b7->enter($__internal_b5063fd7725d3670a9acb177aa1138aa8b41745af997a9cd22c191ba724156b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_e82ce78aaefcf33e464193f3efa481b599f55fb5339f2fdf5209b4c57befa4b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e82ce78aaefcf33e464193f3efa481b599f55fb5339f2fdf5209b4c57befa4b6->enter($__internal_e82ce78aaefcf33e464193f3efa481b599f55fb5339f2fdf5209b4c57befa4b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5063fd7725d3670a9acb177aa1138aa8b41745af997a9cd22c191ba724156b7->leave($__internal_b5063fd7725d3670a9acb177aa1138aa8b41745af997a9cd22c191ba724156b7_prof);

        
        $__internal_e82ce78aaefcf33e464193f3efa481b599f55fb5339f2fdf5209b4c57befa4b6->leave($__internal_e82ce78aaefcf33e464193f3efa481b599f55fb5339f2fdf5209b4c57befa4b6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ae951c9f1b34ce6b318d37827669a0af58a508c63dd7da54e0453ff2bb7acded = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae951c9f1b34ce6b318d37827669a0af58a508c63dd7da54e0453ff2bb7acded->enter($__internal_ae951c9f1b34ce6b318d37827669a0af58a508c63dd7da54e0453ff2bb7acded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4d50b071f6dc65a10c4d1d3847f1b4b04117a9f5486573dbddf9ba0bb4f53b6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d50b071f6dc65a10c4d1d3847f1b4b04117a9f5486573dbddf9ba0bb4f53b6b->enter($__internal_4d50b071f6dc65a10c4d1d3847f1b4b04117a9f5486573dbddf9ba0bb4f53b6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4d50b071f6dc65a10c4d1d3847f1b4b04117a9f5486573dbddf9ba0bb4f53b6b->leave($__internal_4d50b071f6dc65a10c4d1d3847f1b4b04117a9f5486573dbddf9ba0bb4f53b6b_prof);

        
        $__internal_ae951c9f1b34ce6b318d37827669a0af58a508c63dd7da54e0453ff2bb7acded->leave($__internal_ae951c9f1b34ce6b318d37827669a0af58a508c63dd7da54e0453ff2bb7acded_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bf18450cb96b5099dab8563c9d64a051e67df908fab8908f1f8f80e24107a886 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf18450cb96b5099dab8563c9d64a051e67df908fab8908f1f8f80e24107a886->enter($__internal_bf18450cb96b5099dab8563c9d64a051e67df908fab8908f1f8f80e24107a886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e46131bdaca296e62b58eb77ad469f823061aeaf812776e7061731d560e1b47e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e46131bdaca296e62b58eb77ad469f823061aeaf812776e7061731d560e1b47e->enter($__internal_e46131bdaca296e62b58eb77ad469f823061aeaf812776e7061731d560e1b47e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e46131bdaca296e62b58eb77ad469f823061aeaf812776e7061731d560e1b47e->leave($__internal_e46131bdaca296e62b58eb77ad469f823061aeaf812776e7061731d560e1b47e_prof);

        
        $__internal_bf18450cb96b5099dab8563c9d64a051e67df908fab8908f1f8f80e24107a886->leave($__internal_bf18450cb96b5099dab8563c9d64a051e67df908fab8908f1f8f80e24107a886_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dffd733d65ee16208f2581db35aa91630eb2588f9cd3d14012fd44cb7a61af40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dffd733d65ee16208f2581db35aa91630eb2588f9cd3d14012fd44cb7a61af40->enter($__internal_dffd733d65ee16208f2581db35aa91630eb2588f9cd3d14012fd44cb7a61af40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9438a2fb3739beeffd18dcf559ec5723dd0245b7241c447b7d762537b9ebb70d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9438a2fb3739beeffd18dcf559ec5723dd0245b7241c447b7d762537b9ebb70d->enter($__internal_9438a2fb3739beeffd18dcf559ec5723dd0245b7241c447b7d762537b9ebb70d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9438a2fb3739beeffd18dcf559ec5723dd0245b7241c447b7d762537b9ebb70d->leave($__internal_9438a2fb3739beeffd18dcf559ec5723dd0245b7241c447b7d762537b9ebb70d_prof);

        
        $__internal_dffd733d65ee16208f2581db35aa91630eb2588f9cd3d14012fd44cb7a61af40->leave($__internal_dffd733d65ee16208f2581db35aa91630eb2588f9cd3d14012fd44cb7a61af40_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "/home/nicolaescu/Workspace/CarRental/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
