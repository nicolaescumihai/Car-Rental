<?php

/* :orders:new.html.twig */
class __TwigTemplate_139c62c5b94cc168744529a14a61dd728d262600a60bd8fdce7549dfe9045852 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":orders:new.html.twig", 1);
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
        $__internal_c762edb96208873376549d38e2236614f3fe7f00dbf082e7a86294c40eb4c02b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c762edb96208873376549d38e2236614f3fe7f00dbf082e7a86294c40eb4c02b->enter($__internal_c762edb96208873376549d38e2236614f3fe7f00dbf082e7a86294c40eb4c02b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":orders:new.html.twig"));

        $__internal_f23fa26f8e38014d46edc3c59aabe4af2958ba7431a7e01e74dff8f4c7cb43ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f23fa26f8e38014d46edc3c59aabe4af2958ba7431a7e01e74dff8f4c7cb43ba->enter($__internal_f23fa26f8e38014d46edc3c59aabe4af2958ba7431a7e01e74dff8f4c7cb43ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":orders:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c762edb96208873376549d38e2236614f3fe7f00dbf082e7a86294c40eb4c02b->leave($__internal_c762edb96208873376549d38e2236614f3fe7f00dbf082e7a86294c40eb4c02b_prof);

        
        $__internal_f23fa26f8e38014d46edc3c59aabe4af2958ba7431a7e01e74dff8f4c7cb43ba->leave($__internal_f23fa26f8e38014d46edc3c59aabe4af2958ba7431a7e01e74dff8f4c7cb43ba_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c859f98e26076b0c19ec3130075e63fa0acbd3301d30806ea1d7fc82f3907d41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c859f98e26076b0c19ec3130075e63fa0acbd3301d30806ea1d7fc82f3907d41->enter($__internal_c859f98e26076b0c19ec3130075e63fa0acbd3301d30806ea1d7fc82f3907d41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1fdf02151f756c6de901c2ce492e3a26ee282dda56cc4caaf8cdebcfe0df95e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fdf02151f756c6de901c2ce492e3a26ee282dda56cc4caaf8cdebcfe0df95e3->enter($__internal_1fdf02151f756c6de901c2ce492e3a26ee282dda56cc4caaf8cdebcfe0df95e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Order creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("orders_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_1fdf02151f756c6de901c2ce492e3a26ee282dda56cc4caaf8cdebcfe0df95e3->leave($__internal_1fdf02151f756c6de901c2ce492e3a26ee282dda56cc4caaf8cdebcfe0df95e3_prof);

        
        $__internal_c859f98e26076b0c19ec3130075e63fa0acbd3301d30806ea1d7fc82f3907d41->leave($__internal_c859f98e26076b0c19ec3130075e63fa0acbd3301d30806ea1d7fc82f3907d41_prof);

    }

    public function getTemplateName()
    {
        return ":orders:new.html.twig";
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
    <h1>Order creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('orders_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":orders:new.html.twig", "/home/nicolaescu/Workspace/Car-Rental/app/Resources/views/orders/new.html.twig");
    }
}
