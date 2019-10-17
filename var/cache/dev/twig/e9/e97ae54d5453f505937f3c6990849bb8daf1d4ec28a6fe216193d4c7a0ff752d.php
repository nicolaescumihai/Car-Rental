<?php

/* :orders:edit.html.twig */
class __TwigTemplate_72d57c85fa57e1c7c1103df5c57174559feefd1588159059c10c8ac22e3d7efb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":orders:edit.html.twig", 1);
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
        $__internal_5c19ac9324b3abbac18762959fb53a7df0eaa0ff98446f740f931f5729bed1d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c19ac9324b3abbac18762959fb53a7df0eaa0ff98446f740f931f5729bed1d2->enter($__internal_5c19ac9324b3abbac18762959fb53a7df0eaa0ff98446f740f931f5729bed1d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":orders:edit.html.twig"));

        $__internal_22fee7df402dc3e895e45bafd2d828167f2a480f151e82031a4cf9046fed8391 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22fee7df402dc3e895e45bafd2d828167f2a480f151e82031a4cf9046fed8391->enter($__internal_22fee7df402dc3e895e45bafd2d828167f2a480f151e82031a4cf9046fed8391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":orders:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c19ac9324b3abbac18762959fb53a7df0eaa0ff98446f740f931f5729bed1d2->leave($__internal_5c19ac9324b3abbac18762959fb53a7df0eaa0ff98446f740f931f5729bed1d2_prof);

        
        $__internal_22fee7df402dc3e895e45bafd2d828167f2a480f151e82031a4cf9046fed8391->leave($__internal_22fee7df402dc3e895e45bafd2d828167f2a480f151e82031a4cf9046fed8391_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_07791ae0674b0fbfc31e8ecad663700ea0d820c7390da3bc9aeb8c7222d903b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07791ae0674b0fbfc31e8ecad663700ea0d820c7390da3bc9aeb8c7222d903b3->enter($__internal_07791ae0674b0fbfc31e8ecad663700ea0d820c7390da3bc9aeb8c7222d903b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6209a853b2e2c5164aadc45fc74fa03de39236c1cb091f7d5ffeb57094a5303d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6209a853b2e2c5164aadc45fc74fa03de39236c1cb091f7d5ffeb57094a5303d->enter($__internal_6209a853b2e2c5164aadc45fc74fa03de39236c1cb091f7d5ffeb57094a5303d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Order edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("orders_index");
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
        
        $__internal_6209a853b2e2c5164aadc45fc74fa03de39236c1cb091f7d5ffeb57094a5303d->leave($__internal_6209a853b2e2c5164aadc45fc74fa03de39236c1cb091f7d5ffeb57094a5303d_prof);

        
        $__internal_07791ae0674b0fbfc31e8ecad663700ea0d820c7390da3bc9aeb8c7222d903b3->leave($__internal_07791ae0674b0fbfc31e8ecad663700ea0d820c7390da3bc9aeb8c7222d903b3_prof);

    }

    public function getTemplateName()
    {
        return ":orders:edit.html.twig";
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
    <h1>Order edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('orders_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":orders:edit.html.twig", "/home/nicolaescu/Workspace/Car-Rental/app/Resources/views/orders/edit.html.twig");
    }
}
