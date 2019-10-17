<?php

/* :extras:show.html.twig */
class __TwigTemplate_e9c6281610d21744ee3d30db7a4009f7ca72e23ff6b875172a39bad5ebdb1085 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":extras:show.html.twig", 1);
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
        $__internal_f082b90678b8d41f9e067fb246950f598ae873ba5608c3a9146edccb0b3252a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f082b90678b8d41f9e067fb246950f598ae873ba5608c3a9146edccb0b3252a9->enter($__internal_f082b90678b8d41f9e067fb246950f598ae873ba5608c3a9146edccb0b3252a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":extras:show.html.twig"));

        $__internal_4eea1324e7ed6bb420a057a021ed5eb2374c67d71e5169e90bf734d8718d58b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4eea1324e7ed6bb420a057a021ed5eb2374c67d71e5169e90bf734d8718d58b7->enter($__internal_4eea1324e7ed6bb420a057a021ed5eb2374c67d71e5169e90bf734d8718d58b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":extras:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f082b90678b8d41f9e067fb246950f598ae873ba5608c3a9146edccb0b3252a9->leave($__internal_f082b90678b8d41f9e067fb246950f598ae873ba5608c3a9146edccb0b3252a9_prof);

        
        $__internal_4eea1324e7ed6bb420a057a021ed5eb2374c67d71e5169e90bf734d8718d58b7->leave($__internal_4eea1324e7ed6bb420a057a021ed5eb2374c67d71e5169e90bf734d8718d58b7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb973a53aefad69dfe783d256c0a701945b943ccc25244bc0994c559fa46510d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb973a53aefad69dfe783d256c0a701945b943ccc25244bc0994c559fa46510d->enter($__internal_cb973a53aefad69dfe783d256c0a701945b943ccc25244bc0994c559fa46510d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d3a3397090572a678b03e37923ea286172a7838c0b839e8eb277ed273d1bfc57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3a3397090572a678b03e37923ea286172a7838c0b839e8eb277ed273d1bfc57->enter($__internal_d3a3397090572a678b03e37923ea286172a7838c0b839e8eb277ed273d1bfc57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Extra</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["extra"] ?? $this->getContext($context, "extra")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["extra"] ?? $this->getContext($context, "extra")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["extra"] ?? $this->getContext($context, "extra")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("extras_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("extras_edit", array("id" => $this->getAttribute(($context["extra"] ?? $this->getContext($context, "extra")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_d3a3397090572a678b03e37923ea286172a7838c0b839e8eb277ed273d1bfc57->leave($__internal_d3a3397090572a678b03e37923ea286172a7838c0b839e8eb277ed273d1bfc57_prof);

        
        $__internal_cb973a53aefad69dfe783d256c0a701945b943ccc25244bc0994c559fa46510d->leave($__internal_cb973a53aefad69dfe783d256c0a701945b943ccc25244bc0994c559fa46510d_prof);

    }

    public function getTemplateName()
    {
        return ":extras:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 33,  93 => 31,  87 => 28,  81 => 25,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Extra</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ extra.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ extra.name }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ extra.description }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('extras_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('extras_edit', { 'id': extra.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":extras:show.html.twig", "/home/nicolaescu/Workspace/Car-Rental/app/Resources/views/extras/show.html.twig");
    }
}
