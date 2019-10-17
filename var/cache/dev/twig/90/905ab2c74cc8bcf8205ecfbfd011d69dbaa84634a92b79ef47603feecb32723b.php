<?php

/* @App/Admin/show_all_orders.html.twig */
class __TwigTemplate_f5a321966da19b1e896e8c0a32046b43272e9d0d700de5e62e662e154c687f4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@App/Admin/show_all_orders.html.twig", 1);
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
        $__internal_5f9bd6a58908080962706b7e3ecdea5122797a919dd21bb7f05b719ab7cd2fc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f9bd6a58908080962706b7e3ecdea5122797a919dd21bb7f05b719ab7cd2fc2->enter($__internal_5f9bd6a58908080962706b7e3ecdea5122797a919dd21bb7f05b719ab7cd2fc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Admin/show_all_orders.html.twig"));

        $__internal_019796e37fe68f6f0da4f1de42833c8ff24e187d275ee6912d679c7c931130cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_019796e37fe68f6f0da4f1de42833c8ff24e187d275ee6912d679c7c931130cd->enter($__internal_019796e37fe68f6f0da4f1de42833c8ff24e187d275ee6912d679c7c931130cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Admin/show_all_orders.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f9bd6a58908080962706b7e3ecdea5122797a919dd21bb7f05b719ab7cd2fc2->leave($__internal_5f9bd6a58908080962706b7e3ecdea5122797a919dd21bb7f05b719ab7cd2fc2_prof);

        
        $__internal_019796e37fe68f6f0da4f1de42833c8ff24e187d275ee6912d679c7c931130cd->leave($__internal_019796e37fe68f6f0da4f1de42833c8ff24e187d275ee6912d679c7c931130cd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_50006cf51f9f18fdc94de4be1723ff37791da1b2c484162a84203c4e68321c68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50006cf51f9f18fdc94de4be1723ff37791da1b2c484162a84203c4e68321c68->enter($__internal_50006cf51f9f18fdc94de4be1723ff37791da1b2c484162a84203c4e68321c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_976b7198e2bb8ddeae5bb945e10bbeaaee5cc436f5f04aa4027a94491b8c5d68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_976b7198e2bb8ddeae5bb945e10bbeaaee5cc436f5f04aa4027a94491b8c5d68->enter($__internal_976b7198e2bb8ddeae5bb945e10bbeaaee5cc436f5f04aa4027a94491b8c5d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Orders list</h1>

    <table>
        <thead>

        </thead>
        <tbody>
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? $this->getContext($context, "orders")));
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 12
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("orders_show", array("id" => $this->getAttribute($context["order"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "id", array()), "html", null, true);
            echo "</a>
                <br>
                ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["order"], "extras", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["extra"]) {
                // line 15
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["extra"], "name", array()), "html", null, true);
                echo "
                    ";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($context["extra"], "description", array()), "html", null, true);
                echo "
                    ";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["extra"], "price", array()), "html", null, true);
                echo "<br>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extra'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["order"], "cars", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["car"]) {
                // line 20
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["car"], "name", array()), "html", null, true);
                echo "
                    ";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["car"], "description", array()), "html", null, true);
                echo "
                    ";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["car"], "price", array()), "html", null, true);
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['car'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        </tbody>
    </table>
";
        
        $__internal_976b7198e2bb8ddeae5bb945e10bbeaaee5cc436f5f04aa4027a94491b8c5d68->leave($__internal_976b7198e2bb8ddeae5bb945e10bbeaaee5cc436f5f04aa4027a94491b8c5d68_prof);

        
        $__internal_50006cf51f9f18fdc94de4be1723ff37791da1b2c484162a84203c4e68321c68->leave($__internal_50006cf51f9f18fdc94de4be1723ff37791da1b2c484162a84203c4e68321c68_prof);

    }

    public function getTemplateName()
    {
        return "@App/Admin/show_all_orders.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 25,  113 => 24,  105 => 22,  101 => 21,  96 => 20,  91 => 19,  83 => 17,  79 => 16,  74 => 15,  70 => 14,  62 => 12,  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Orders list</h1>

    <table>
        <thead>

        </thead>
        <tbody>
        {% for order in orders %}
                <a href=\"{{ path('orders_show', { 'id': order.id }) }}\">{{ order.id }}</a>
                <br>
                {% for extra in order.extras %}
                    {{ extra.name }}
                    {{ extra.description }}
                    {{ extra.price }}<br>
                {% endfor %}
                {% for car in order.cars %}
                    {{ car.name }}
                    {{ car.description }}
                    {{ car.price }}
                {% endfor %}
        {% endfor %}
        </tbody>
    </table>
{% endblock %}", "@App/Admin/show_all_orders.html.twig", "/home/nicolaescu/Workspace/Car-Rental/src/AppBundle/Resources/views/Admin/show_all_orders.html.twig");
    }
}
