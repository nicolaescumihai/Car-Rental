<?php

/* :extras:new.html.twig */
class __TwigTemplate_ff9828b1bc19124d859733f9b107f4e19eca57af000b3defd3ae7cbb9e8801b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":extras:new.html.twig", 1);
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
        $__internal_75e68deeaf6d019ad5993013be160302143b4ddf6ece0648920e60f4d6c41e44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75e68deeaf6d019ad5993013be160302143b4ddf6ece0648920e60f4d6c41e44->enter($__internal_75e68deeaf6d019ad5993013be160302143b4ddf6ece0648920e60f4d6c41e44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":extras:new.html.twig"));

        $__internal_d896e3243738a321214fc4a99457922b52de5af871d53028cc5a6891b52be144 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d896e3243738a321214fc4a99457922b52de5af871d53028cc5a6891b52be144->enter($__internal_d896e3243738a321214fc4a99457922b52de5af871d53028cc5a6891b52be144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":extras:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75e68deeaf6d019ad5993013be160302143b4ddf6ece0648920e60f4d6c41e44->leave($__internal_75e68deeaf6d019ad5993013be160302143b4ddf6ece0648920e60f4d6c41e44_prof);

        
        $__internal_d896e3243738a321214fc4a99457922b52de5af871d53028cc5a6891b52be144->leave($__internal_d896e3243738a321214fc4a99457922b52de5af871d53028cc5a6891b52be144_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8dfd2f6f0b23d4ba3063a5063a0800b54958c602844f11ff9271cddf7b345347 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dfd2f6f0b23d4ba3063a5063a0800b54958c602844f11ff9271cddf7b345347->enter($__internal_8dfd2f6f0b23d4ba3063a5063a0800b54958c602844f11ff9271cddf7b345347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0ffcc9a5ddc959115b14c382bce4328ce19f9d1353362db8878ffaecb0cc3060 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ffcc9a5ddc959115b14c382bce4328ce19f9d1353362db8878ffaecb0cc3060->enter($__internal_0ffcc9a5ddc959115b14c382bce4328ce19f9d1353362db8878ffaecb0cc3060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Extra creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("extras_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_0ffcc9a5ddc959115b14c382bce4328ce19f9d1353362db8878ffaecb0cc3060->leave($__internal_0ffcc9a5ddc959115b14c382bce4328ce19f9d1353362db8878ffaecb0cc3060_prof);

        
        $__internal_8dfd2f6f0b23d4ba3063a5063a0800b54958c602844f11ff9271cddf7b345347->leave($__internal_8dfd2f6f0b23d4ba3063a5063a0800b54958c602844f11ff9271cddf7b345347_prof);

    }

    public function getTemplateName()
    {
        return ":extras:new.html.twig";
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
    <h1>Extra creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('extras_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":extras:new.html.twig", "/home/nicolaescu/Workspace/Car-Rental/app/Resources/views/extras/new.html.twig");
    }
}
