<?php

/* car/new.html.twig */
class __TwigTemplate_53fe264e9148d791b5a5d18822bb4fd7cc9366a0496789d6b8c1c63dfdd647b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "car/new.html.twig", 1);
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
        $__internal_49cca4bd6530c1b9c9a74e652b1ca34274e2f7ca17abef76b298d584f03b5505 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49cca4bd6530c1b9c9a74e652b1ca34274e2f7ca17abef76b298d584f03b5505->enter($__internal_49cca4bd6530c1b9c9a74e652b1ca34274e2f7ca17abef76b298d584f03b5505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "car/new.html.twig"));

        $__internal_2e9de662d1ba7f7aae2d22c44b365235002de84e27c08bac81a895630e88db88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e9de662d1ba7f7aae2d22c44b365235002de84e27c08bac81a895630e88db88->enter($__internal_2e9de662d1ba7f7aae2d22c44b365235002de84e27c08bac81a895630e88db88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "car/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49cca4bd6530c1b9c9a74e652b1ca34274e2f7ca17abef76b298d584f03b5505->leave($__internal_49cca4bd6530c1b9c9a74e652b1ca34274e2f7ca17abef76b298d584f03b5505_prof);

        
        $__internal_2e9de662d1ba7f7aae2d22c44b365235002de84e27c08bac81a895630e88db88->leave($__internal_2e9de662d1ba7f7aae2d22c44b365235002de84e27c08bac81a895630e88db88_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5749f0e8c85df54375e86bcfc3abb4e032837c86207d7e8b56add62ecbd2ae8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5749f0e8c85df54375e86bcfc3abb4e032837c86207d7e8b56add62ecbd2ae8d->enter($__internal_5749f0e8c85df54375e86bcfc3abb4e032837c86207d7e8b56add62ecbd2ae8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7b19260fc2bba20ddc25f327a6f8656cbd3b25618208ef34cce31468c8f4c6a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b19260fc2bba20ddc25f327a6f8656cbd3b25618208ef34cce31468c8f4c6a8->enter($__internal_7b19260fc2bba20ddc25f327a6f8656cbd3b25618208ef34cce31468c8f4c6a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7b19260fc2bba20ddc25f327a6f8656cbd3b25618208ef34cce31468c8f4c6a8->leave($__internal_7b19260fc2bba20ddc25f327a6f8656cbd3b25618208ef34cce31468c8f4c6a8_prof);

        
        $__internal_5749f0e8c85df54375e86bcfc3abb4e032837c86207d7e8b56add62ecbd2ae8d->leave($__internal_5749f0e8c85df54375e86bcfc3abb4e032837c86207d7e8b56add62ecbd2ae8d_prof);

    }

    public function getTemplateName()
    {
        return "car/new.html.twig";
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
", "car/new.html.twig", "/home/nicolaescu/Workspace/CarRental/app/Resources/views/car/new.html.twig");
    }
}
