<?php

/* :car:new.html.twig */
class __TwigTemplate_53fe264e9148d791b5a5d18822bb4fd7cc9366a0496789d6b8c1c63dfdd647b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":car:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6c87ce30e1aa5ae701e04dc90f1815e28e21927c0b0d03a66c7000dad0ffd569 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c87ce30e1aa5ae701e04dc90f1815e28e21927c0b0d03a66c7000dad0ffd569->enter($__internal_6c87ce30e1aa5ae701e04dc90f1815e28e21927c0b0d03a66c7000dad0ffd569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":car:new.html.twig"));

        $__internal_636a96b87cf177e420ad463260491e30d76165e47e7cfebc8327bf5f89606bea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_636a96b87cf177e420ad463260491e30d76165e47e7cfebc8327bf5f89606bea->enter($__internal_636a96b87cf177e420ad463260491e30d76165e47e7cfebc8327bf5f89606bea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":car:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c87ce30e1aa5ae701e04dc90f1815e28e21927c0b0d03a66c7000dad0ffd569->leave($__internal_6c87ce30e1aa5ae701e04dc90f1815e28e21927c0b0d03a66c7000dad0ffd569_prof);

        
        $__internal_636a96b87cf177e420ad463260491e30d76165e47e7cfebc8327bf5f89606bea->leave($__internal_636a96b87cf177e420ad463260491e30d76165e47e7cfebc8327bf5f89606bea_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_40e2b45c2a914d3cdb565a4f955054e71225dcb0be690870b99821928f7b49a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40e2b45c2a914d3cdb565a4f955054e71225dcb0be690870b99821928f7b49a7->enter($__internal_40e2b45c2a914d3cdb565a4f955054e71225dcb0be690870b99821928f7b49a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f7ee9a3de753b19dfb9b58ab1a20c1785e49e7c92904a10fe82107725cff55b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7ee9a3de753b19dfb9b58ab1a20c1785e49e7c92904a10fe82107725cff55b7->enter($__internal_f7ee9a3de753b19dfb9b58ab1a20c1785e49e7c92904a10fe82107725cff55b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Car creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("car_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_f7ee9a3de753b19dfb9b58ab1a20c1785e49e7c92904a10fe82107725cff55b7->leave($__internal_f7ee9a3de753b19dfb9b58ab1a20c1785e49e7c92904a10fe82107725cff55b7_prof);

        
        $__internal_40e2b45c2a914d3cdb565a4f955054e71225dcb0be690870b99821928f7b49a7->leave($__internal_40e2b45c2a914d3cdb565a4f955054e71225dcb0be690870b99821928f7b49a7_prof);

    }

    public function getTemplateName()
    {
        return ":car:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Car creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('car_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":car:new.html.twig", "/home/nicolaescu/Workspace/Car-Rental/app/Resources/views/car/new.html.twig");
    }
}
