<?php

/* :car:index.html.twig */
class __TwigTemplate_eb5003ef7886debf31f50d65f65b8947cfc9fc52f2b707c67ff4a615eccc1a39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":car:index.html.twig", 1);
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
        $__internal_470fa4fad7faa4117b834640a9719af20932f76603e3f17c24c2fd6ead03c68f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_470fa4fad7faa4117b834640a9719af20932f76603e3f17c24c2fd6ead03c68f->enter($__internal_470fa4fad7faa4117b834640a9719af20932f76603e3f17c24c2fd6ead03c68f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":car:index.html.twig"));

        $__internal_8fcfc87925307551cb74928a0faebd417ab9917d427929de23735d8cef80ca56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fcfc87925307551cb74928a0faebd417ab9917d427929de23735d8cef80ca56->enter($__internal_8fcfc87925307551cb74928a0faebd417ab9917d427929de23735d8cef80ca56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":car:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_470fa4fad7faa4117b834640a9719af20932f76603e3f17c24c2fd6ead03c68f->leave($__internal_470fa4fad7faa4117b834640a9719af20932f76603e3f17c24c2fd6ead03c68f_prof);

        
        $__internal_8fcfc87925307551cb74928a0faebd417ab9917d427929de23735d8cef80ca56->leave($__internal_8fcfc87925307551cb74928a0faebd417ab9917d427929de23735d8cef80ca56_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e766061bb00c6103de3a0156ea81d3e4274b7f6c9777a2a270caeb8ab4ca8f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e766061bb00c6103de3a0156ea81d3e4274b7f6c9777a2a270caeb8ab4ca8f4->enter($__internal_8e766061bb00c6103de3a0156ea81d3e4274b7f6c9777a2a270caeb8ab4ca8f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_60f713ca2af61b16a5cdadbab8d3151b52ec16ae47fcb14f16f771adaac22ac3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60f713ca2af61b16a5cdadbab8d3151b52ec16ae47fcb14f16f771adaac22ac3->enter($__internal_60f713ca2af61b16a5cdadbab8d3151b52ec16ae47fcb14f16f771adaac22ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2>Cars list</h2>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Rented</th>
            </tr>
        </thead>


        <tbody>

        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cars"] ?? $this->getContext($context, "cars")));
        foreach ($context['_seq'] as $context["_key"] => $context["car"]) {
            // line 20
            echo "            <tr>
                <th>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["car"], "name", array()), "html", null, true);
            echo "</th>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["car"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["car"], "price", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            if ($this->getAttribute($context["car"], "rented", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>
                    <a class=\"btn btn-primary\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("orders_new", array("carId" => $this->getAttribute($context["car"], "id", array()))), "html", null, true);
            echo "\" role=\"button\">Add</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['car'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "<br>
        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cars2"] ?? $this->getContext($context, "cars2")));
        foreach ($context['_seq'] as $context["_key"] => $context["car"]) {
            // line 32
            echo "        <tr>
            <th>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["car"], "name", array()), "html", null, true);
            echo "</th> <br>
            <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["car"], "description", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["car"], "price", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 36
            if ($this->getAttribute($context["car"], "rented", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
";
            // line 40
            echo "        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['car'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </tbody>
    </table>

";
        
        $__internal_60f713ca2af61b16a5cdadbab8d3151b52ec16ae47fcb14f16f771adaac22ac3->leave($__internal_60f713ca2af61b16a5cdadbab8d3151b52ec16ae47fcb14f16f771adaac22ac3_prof);

        
        $__internal_8e766061bb00c6103de3a0156ea81d3e4274b7f6c9777a2a270caeb8ab4ca8f4->leave($__internal_8e766061bb00c6103de3a0156ea81d3e4274b7f6c9777a2a270caeb8ab4ca8f4_prof);

    }

    public function getTemplateName()
    {
        return ":car:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 42,  134 => 40,  126 => 36,  122 => 35,  118 => 34,  114 => 33,  111 => 32,  107 => 31,  104 => 30,  94 => 26,  85 => 24,  81 => 23,  77 => 22,  73 => 21,  70 => 20,  66 => 19,  49 => 4,  40 => 3,  11 => 1,);
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
    <h2>Cars list</h2>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Rented</th>
            </tr>
        </thead>


        <tbody>

        {% for car in cars %}
            <tr>
                <th>{{ car.name }}</th>
                <td>{{ car.description }}</td>
                <td>{{ car.price }}</td>
                <td>{% if car.rented %}Yes{% else %}No{% endif %}</td>
                <td>
                    <a class=\"btn btn-primary\" href=\"{{ path('orders_new', {carId: car.id}) }}\" role=\"button\">Add</a>
                </td>
            </tr>
        {% endfor %}
<br>
        {% for car in cars2 %}
        <tr>
            <th>{{ car.name }}</th> <br>
            <td>{{ car.description }}</td>
            <td>{{ car.price }}</td>
            <td>{% if car.rented %}Yes{% else %}No{% endif %}</td>
{#            <td>#}
{#                <a class=\"btn btn-primary\" href=\"{{ path('orders_new', {carId: car.id}) }}\" role=\"button\">Add</a>#}
{#            </td>#}
        </tr>
        {% endfor %}
        </tbody>
    </table>

{% endblock %}
", ":car:index.html.twig", "/home/nicolaescu/Workspace/Car-Rental/app/Resources/views/car/index.html.twig");
    }
}
