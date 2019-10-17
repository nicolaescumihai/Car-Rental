<?php

/* :user:edit.html.twig */
class __TwigTemplate_2cf662d5bee09ecb70696fc1341c3fb863bd07d292bed6369408942dce225c29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:edit.html.twig", 1);
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
        $__internal_e6acce0627e458d46a5a26636ad0db1ae793fe6847051fb5a596359e04e286ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6acce0627e458d46a5a26636ad0db1ae793fe6847051fb5a596359e04e286ab->enter($__internal_e6acce0627e458d46a5a26636ad0db1ae793fe6847051fb5a596359e04e286ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:edit.html.twig"));

        $__internal_f3e97ea844f930010c4853d744722c9a7bea92594e48ba1795bdf51b0ea48d60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3e97ea844f930010c4853d744722c9a7bea92594e48ba1795bdf51b0ea48d60->enter($__internal_f3e97ea844f930010c4853d744722c9a7bea92594e48ba1795bdf51b0ea48d60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6acce0627e458d46a5a26636ad0db1ae793fe6847051fb5a596359e04e286ab->leave($__internal_e6acce0627e458d46a5a26636ad0db1ae793fe6847051fb5a596359e04e286ab_prof);

        
        $__internal_f3e97ea844f930010c4853d744722c9a7bea92594e48ba1795bdf51b0ea48d60->leave($__internal_f3e97ea844f930010c4853d744722c9a7bea92594e48ba1795bdf51b0ea48d60_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a207553cc4984d42aa9497143818276cd0fef60c01651433b63769945860dc92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a207553cc4984d42aa9497143818276cd0fef60c01651433b63769945860dc92->enter($__internal_a207553cc4984d42aa9497143818276cd0fef60c01651433b63769945860dc92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7d87cf67b999e31c1b37f790850a825e1f739c71f4da837933eee3b82b03ece6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d87cf67b999e31c1b37f790850a825e1f739c71f4da837933eee3b82b03ece6->enter($__internal_7d87cf67b999e31c1b37f790850a825e1f739c71f4da837933eee3b82b03ece6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
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
        
        $__internal_7d87cf67b999e31c1b37f790850a825e1f739c71f4da837933eee3b82b03ece6->leave($__internal_7d87cf67b999e31c1b37f790850a825e1f739c71f4da837933eee3b82b03ece6_prof);

        
        $__internal_a207553cc4984d42aa9497143818276cd0fef60c01651433b63769945860dc92->leave($__internal_a207553cc4984d42aa9497143818276cd0fef60c01651433b63769945860dc92_prof);

    }

    public function getTemplateName()
    {
        return ":user:edit.html.twig";
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
    <h1>User edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('user_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":user:edit.html.twig", "/home/nicolaescu/Workspace/Car-Rental/app/Resources/views/user/edit.html.twig");
    }
}
