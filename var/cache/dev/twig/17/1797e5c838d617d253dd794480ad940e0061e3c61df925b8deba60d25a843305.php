<?php

/* :extras:edit.html.twig */
class __TwigTemplate_28bf2c87f9be4db58de46b71f7c371148cdb931dd9853823536cdd5a20968749 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":extras:edit.html.twig", 1);
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
        $__internal_9c95e97a07a154b2b13a3b93e21a983e529f0d332176eadc69aab6031882b5ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c95e97a07a154b2b13a3b93e21a983e529f0d332176eadc69aab6031882b5ac->enter($__internal_9c95e97a07a154b2b13a3b93e21a983e529f0d332176eadc69aab6031882b5ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":extras:edit.html.twig"));

        $__internal_64d236e1c6ddd857ae888e5885a5c5b14b7956fe10b63ea85384c8e3b25f56dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64d236e1c6ddd857ae888e5885a5c5b14b7956fe10b63ea85384c8e3b25f56dc->enter($__internal_64d236e1c6ddd857ae888e5885a5c5b14b7956fe10b63ea85384c8e3b25f56dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":extras:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c95e97a07a154b2b13a3b93e21a983e529f0d332176eadc69aab6031882b5ac->leave($__internal_9c95e97a07a154b2b13a3b93e21a983e529f0d332176eadc69aab6031882b5ac_prof);

        
        $__internal_64d236e1c6ddd857ae888e5885a5c5b14b7956fe10b63ea85384c8e3b25f56dc->leave($__internal_64d236e1c6ddd857ae888e5885a5c5b14b7956fe10b63ea85384c8e3b25f56dc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f489359426cb1f030726804b5d087aba611089c7ba5b32707588d33e4a26bd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f489359426cb1f030726804b5d087aba611089c7ba5b32707588d33e4a26bd0->enter($__internal_7f489359426cb1f030726804b5d087aba611089c7ba5b32707588d33e4a26bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6312eb46b63952dc9db86e8d4373c8424032f5894590372a69663eedca987f35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6312eb46b63952dc9db86e8d4373c8424032f5894590372a69663eedca987f35->enter($__internal_6312eb46b63952dc9db86e8d4373c8424032f5894590372a69663eedca987f35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Extra edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("extras_index");
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
        
        $__internal_6312eb46b63952dc9db86e8d4373c8424032f5894590372a69663eedca987f35->leave($__internal_6312eb46b63952dc9db86e8d4373c8424032f5894590372a69663eedca987f35_prof);

        
        $__internal_7f489359426cb1f030726804b5d087aba611089c7ba5b32707588d33e4a26bd0->leave($__internal_7f489359426cb1f030726804b5d087aba611089c7ba5b32707588d33e4a26bd0_prof);

    }

    public function getTemplateName()
    {
        return ":extras:edit.html.twig";
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
    <h1>Extra edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('extras_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":extras:edit.html.twig", "/home/nicolaescu/Workspace/Car-Rental/app/Resources/views/extras/edit.html.twig");
    }
}
