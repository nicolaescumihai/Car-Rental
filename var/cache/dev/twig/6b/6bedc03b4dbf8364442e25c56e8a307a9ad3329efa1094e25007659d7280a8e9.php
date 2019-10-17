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
        $__internal_3a716fc6b442845cc4e12eb18b5b7eff9e1d2a3e9c046f7ba4f2d135dd462278 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a716fc6b442845cc4e12eb18b5b7eff9e1d2a3e9c046f7ba4f2d135dd462278->enter($__internal_3a716fc6b442845cc4e12eb18b5b7eff9e1d2a3e9c046f7ba4f2d135dd462278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "orders/CompleteOrder.html.twig"));

        $__internal_278719eb78cf45132ea15e76c34f7744b9e41fa85591e06ad0207a62bbd91e1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_278719eb78cf45132ea15e76c34f7744b9e41fa85591e06ad0207a62bbd91e1e->enter($__internal_278719eb78cf45132ea15e76c34f7744b9e41fa85591e06ad0207a62bbd91e1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "orders/CompleteOrder.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a716fc6b442845cc4e12eb18b5b7eff9e1d2a3e9c046f7ba4f2d135dd462278->leave($__internal_3a716fc6b442845cc4e12eb18b5b7eff9e1d2a3e9c046f7ba4f2d135dd462278_prof);

        
        $__internal_278719eb78cf45132ea15e76c34f7744b9e41fa85591e06ad0207a62bbd91e1e->leave($__internal_278719eb78cf45132ea15e76c34f7744b9e41fa85591e06ad0207a62bbd91e1e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7b13223ef5eb47301962f056d02a81a543de496ba834de6870684e418081ed62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b13223ef5eb47301962f056d02a81a543de496ba834de6870684e418081ed62->enter($__internal_7b13223ef5eb47301962f056d02a81a543de496ba834de6870684e418081ed62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e94a0d61cc7129163a5747e0f8974176ed4b2dead25be717f0f11a2d47292d88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e94a0d61cc7129163a5747e0f8974176ed4b2dead25be717f0f11a2d47292d88->enter($__internal_e94a0d61cc7129163a5747e0f8974176ed4b2dead25be717f0f11a2d47292d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Orders list</h1>

    <table>
        <thead>
        <tr>
        </tr>
        </thead>
        <tbody>
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? $this->getContext($context, "orders")));
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 13
            echo "            <tr>
                <td><a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("orders_show", array("id" => $this->getAttribute($context["order"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 15
            if ($this->getAttribute($context["order"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["order"], "date", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "price", array()), "html", null, true);
            echo "</td>

            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "        </tbody>
    </table>
    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["orders"] ?? $this->getContext($context, "orders")), "cars", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["car"]) {
            // line 23
            echo "        <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["car"], "name", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["car"], "description", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["car"], "price", array()), "html", null, true);
            echo "</td>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['car'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "<br>
    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["orders"] ?? $this->getContext($context, "orders")), "extras", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["extra"]) {
            // line 29
            echo "        <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["extra"], "name", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["extra"], "description", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["extra"], "price", array()), "html", null, true);
            echo "</td>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extra'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "    <br>
<td><strong> Total Price : ";
        // line 34
        echo twig_escape_filter($this->env, ($context["totalPrice"] ?? $this->getContext($context, "totalPrice")), "html", null, true);
        echo "</strong></td>
    <br>


    <a class=\"btn btn-primary\" href=\"#\" role=\"button\">Pay</a>
";
        
        $__internal_e94a0d61cc7129163a5747e0f8974176ed4b2dead25be717f0f11a2d47292d88->leave($__internal_e94a0d61cc7129163a5747e0f8974176ed4b2dead25be717f0f11a2d47292d88_prof);

        
        $__internal_7b13223ef5eb47301962f056d02a81a543de496ba834de6870684e418081ed62->leave($__internal_7b13223ef5eb47301962f056d02a81a543de496ba834de6870684e418081ed62_prof);

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
        return array (  140 => 34,  137 => 33,  129 => 31,  125 => 30,  120 => 29,  116 => 28,  113 => 27,  105 => 25,  101 => 24,  96 => 23,  92 => 22,  88 => 20,  78 => 16,  72 => 15,  66 => 14,  63 => 13,  59 => 12,  49 => 4,  40 => 3,  11 => 1,);
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
", "orders/CompleteOrder.html.twig", "/home/nicolaescu/Workspace/Car-Rental/app/Resources/views/orders/CompleteOrder.html.twig");
    }
}
