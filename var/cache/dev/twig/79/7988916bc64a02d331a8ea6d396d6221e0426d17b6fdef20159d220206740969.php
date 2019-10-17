<?php

/* :car:edit.html.twig */
class __TwigTemplate_f6115e098046e697ed1e0b25e27d2602abfbeee6f802b4d3108f0c6debbd4371 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":car:edit.html.twig", 1);
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
        $__internal_40fb1182e3518a53b54645d43709303a4c35e89217591844b2243c95d571b8dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40fb1182e3518a53b54645d43709303a4c35e89217591844b2243c95d571b8dc->enter($__internal_40fb1182e3518a53b54645d43709303a4c35e89217591844b2243c95d571b8dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":car:edit.html.twig"));

        $__internal_90e79286f5820757830c3a46c98a816845bff6e1fe63513df1e5f9f6667367df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90e79286f5820757830c3a46c98a816845bff6e1fe63513df1e5f9f6667367df->enter($__internal_90e79286f5820757830c3a46c98a816845bff6e1fe63513df1e5f9f6667367df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":car:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40fb1182e3518a53b54645d43709303a4c35e89217591844b2243c95d571b8dc->leave($__internal_40fb1182e3518a53b54645d43709303a4c35e89217591844b2243c95d571b8dc_prof);

        
        $__internal_90e79286f5820757830c3a46c98a816845bff6e1fe63513df1e5f9f6667367df->leave($__internal_90e79286f5820757830c3a46c98a816845bff6e1fe63513df1e5f9f6667367df_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4f7745e0ffc8a6edec1c99384a0686c3cef6641964b7e3b1874b557ef2c367ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f7745e0ffc8a6edec1c99384a0686c3cef6641964b7e3b1874b557ef2c367ab->enter($__internal_4f7745e0ffc8a6edec1c99384a0686c3cef6641964b7e3b1874b557ef2c367ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d1cc84148f831d6c110191324be382fba13ffb45f91488df398097961a8f3fcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1cc84148f831d6c110191324be382fba13ffb45f91488df398097961a8f3fcc->enter($__internal_d1cc84148f831d6c110191324be382fba13ffb45f91488df398097961a8f3fcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Car edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("car_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_d1cc84148f831d6c110191324be382fba13ffb45f91488df398097961a8f3fcc->leave($__internal_d1cc84148f831d6c110191324be382fba13ffb45f91488df398097961a8f3fcc_prof);

        
        $__internal_4f7745e0ffc8a6edec1c99384a0686c3cef6641964b7e3b1874b557ef2c367ab->leave($__internal_4f7745e0ffc8a6edec1c99384a0686c3cef6641964b7e3b1874b557ef2c367ab_prof);

    }

    public function getTemplateName()
    {
        return ":car:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Car edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('car_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":car:edit.html.twig", "/home/nicolaescu/Workspace/Car-Rental/app/Resources/views/car/edit.html.twig");
    }
}
