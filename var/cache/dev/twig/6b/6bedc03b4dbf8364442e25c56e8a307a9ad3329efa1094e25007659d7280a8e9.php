<?php

/* orders/CompleteOrder.html.twig */
class __TwigTemplate_eda9e0508bda11036964f707f91305978fe191521d3ea69cf1990aa237aa5004 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "orders/CompleteOrder.html.twig", 1);
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
        $__internal_aef708ded160d585c359ac4b19e5943bbb3d3c5ed9b756430165e13f229a5a7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aef708ded160d585c359ac4b19e5943bbb3d3c5ed9b756430165e13f229a5a7b->enter($__internal_aef708ded160d585c359ac4b19e5943bbb3d3c5ed9b756430165e13f229a5a7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "orders/CompleteOrder.html.twig"));

        $__internal_56bb97571f342202786b650445e3c274b3c61559ae16ca8ffbce9984c354acbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56bb97571f342202786b650445e3c274b3c61559ae16ca8ffbce9984c354acbe->enter($__internal_56bb97571f342202786b650445e3c274b3c61559ae16ca8ffbce9984c354acbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "orders/CompleteOrder.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aef708ded160d585c359ac4b19e5943bbb3d3c5ed9b756430165e13f229a5a7b->leave($__internal_aef708ded160d585c359ac4b19e5943bbb3d3c5ed9b756430165e13f229a5a7b_prof);

        
        $__internal_56bb97571f342202786b650445e3c274b3c61559ae16ca8ffbce9984c354acbe->leave($__internal_56bb97571f342202786b650445e3c274b3c61559ae16ca8ffbce9984c354acbe_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2392de22715e2fa029b268eb1cd0d16409b1d1b39dc632ae24e51d8b7ecbd70e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2392de22715e2fa029b268eb1cd0d16409b1d1b39dc632ae24e51d8b7ecbd70e->enter($__internal_2392de22715e2fa029b268eb1cd0d16409b1d1b39dc632ae24e51d8b7ecbd70e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_04b1b1e5da798c1d0f1f70862c481c1b3c328614d0363c608fbfcee10d32eada = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04b1b1e5da798c1d0f1f70862c481c1b3c328614d0363c608fbfcee10d32eada->enter($__internal_04b1b1e5da798c1d0f1f70862c481c1b3c328614d0363c608fbfcee10d32eada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Orders list</h1>

    <table>
        <thead>
        <tr>
            <th>Id</th>
            <th>Date</th>
            <th>Price</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? $this->getContext($context, "orders")));
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("orders_show", array("id" => $this->getAttribute($context["order"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            if ($this->getAttribute($context["order"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["order"], "date", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "price", array()), "html", null, true);
            echo "</td>

            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        </tbody>
    </table>
    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["orders"] ?? $this->getContext($context, "orders")), "cars", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["car"]) {
            // line 27
            echo "        <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["car"], "name", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["car"], "description", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["car"], "price", array()), "html", null, true);
            echo "</td>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['car'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "<br>
    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["orders"] ?? $this->getContext($context, "orders")), "extras", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["extra"]) {
            // line 33
            echo "        <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["extra"], "name", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["extra"], "description", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["extra"], "price", array()), "html", null, true);
            echo "</td>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extra'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "    <br>
<td><strong> Total Price : ";
        // line 38
        echo twig_escape_filter($this->env, ($context["totalPrice"] ?? $this->getContext($context, "totalPrice")), "html", null, true);
        echo "</strong></td>
    <br>


    <a class=\"btn btn-primary\" href=\"#\" role=\"button\">Pay</a>
";
        
        $__internal_04b1b1e5da798c1d0f1f70862c481c1b3c328614d0363c608fbfcee10d32eada->leave($__internal_04b1b1e5da798c1d0f1f70862c481c1b3c328614d0363c608fbfcee10d32eada_prof);

        
        $__internal_2392de22715e2fa029b268eb1cd0d16409b1d1b39dc632ae24e51d8b7ecbd70e->leave($__internal_2392de22715e2fa029b268eb1cd0d16409b1d1b39dc632ae24e51d8b7ecbd70e_prof);

    }

    public function getTemplateName()
    {
        return "orders/CompleteOrder.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 38,  141 => 37,  133 => 35,  129 => 34,  124 => 33,  120 => 32,  117 => 31,  109 => 29,  105 => 28,  100 => 27,  96 => 26,  92 => 24,  82 => 20,  76 => 19,  70 => 18,  67 => 17,  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
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
        <tr>
            <th>Id</th>
            <th>Date</th>
            <th>Price</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        {% for order in orders %}
            <tr>
                <td><a href=\"{{ path('orders_show', { 'id': order.id }) }}\">{{ order.id }}</a></td>
                <td>{% if order.date %}{{ order.date|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{{ order.price }}</td>

            </tr>
        {% endfor %}
        </tbody>
    </table>
    {% for car in orders.cars %}
        <td>{{ car.name }}</td>
        <td>{{ car.description }}</td>
        <td>{{ car.price }}</td>
    {% endfor %}
<br>
    {% for extra in orders.extras %}
        <td>{{ extra.name }}</td>
        <td>{{ extra.description }}</td>
        <td>{{ extra.price }}</td>
    {% endfor %}
    <br>
<td><strong> Total Price : {{ totalPrice }}</strong></td>
    <br>


    <a class=\"btn btn-primary\" href=\"#\" role=\"button\">Pay</a>
{% endblock %}
", "orders/CompleteOrder.html.twig", "/home/nicolaescu/Workspace/CarRental/app/Resources/views/orders/CompleteOrder.html.twig");
    }
}
