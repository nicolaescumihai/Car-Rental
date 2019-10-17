<?php

/* orders/index.html.twig */
class __TwigTemplate_4b0d4d4c4eee0591472a9766dde5ec3d652e7d6c0fd68c490a8ba654593caab9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "orders/index.html.twig", 1);
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
        $__internal_2fc10cb0167ebdf7b605ecb508d074f9ea5258da4781d9729e049770dbce0d61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fc10cb0167ebdf7b605ecb508d074f9ea5258da4781d9729e049770dbce0d61->enter($__internal_2fc10cb0167ebdf7b605ecb508d074f9ea5258da4781d9729e049770dbce0d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "orders/index.html.twig"));

        $__internal_45ec1647a3c7405535ee20b8cf91d3084deef3dc03c9a32c6809532d9fbd499f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45ec1647a3c7405535ee20b8cf91d3084deef3dc03c9a32c6809532d9fbd499f->enter($__internal_45ec1647a3c7405535ee20b8cf91d3084deef3dc03c9a32c6809532d9fbd499f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "orders/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2fc10cb0167ebdf7b605ecb508d074f9ea5258da4781d9729e049770dbce0d61->leave($__internal_2fc10cb0167ebdf7b605ecb508d074f9ea5258da4781d9729e049770dbce0d61_prof);

        
        $__internal_45ec1647a3c7405535ee20b8cf91d3084deef3dc03c9a32c6809532d9fbd499f->leave($__internal_45ec1647a3c7405535ee20b8cf91d3084deef3dc03c9a32c6809532d9fbd499f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ba5c2655e7bca04f04a053c3ad21ca2bfe93dce8d47488ee3244393206cb7f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ba5c2655e7bca04f04a053c3ad21ca2bfe93dce8d47488ee3244393206cb7f8->enter($__internal_8ba5c2655e7bca04f04a053c3ad21ca2bfe93dce8d47488ee3244393206cb7f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3cce5f500d62970e3e444885258ae3a9ee2b1354f96e797e4f4fc346b15c4d2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cce5f500d62970e3e444885258ae3a9ee2b1354f96e797e4f4fc346b15c4d2b->enter($__internal_3cce5f500d62970e3e444885258ae3a9ee2b1354f96e797e4f4fc346b15c4d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("orders_show", array("id" => $this->getAttribute($context["order"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("orders_edit", array("id" => $this->getAttribute($context["order"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("orders_new");
        echo "\">Create a new order</a>
        </li>
    </ul>
";
        
        $__internal_3cce5f500d62970e3e444885258ae3a9ee2b1354f96e797e4f4fc346b15c4d2b->leave($__internal_3cce5f500d62970e3e444885258ae3a9ee2b1354f96e797e4f4fc346b15c4d2b_prof);

        
        $__internal_8ba5c2655e7bca04f04a053c3ad21ca2bfe93dce8d47488ee3244393206cb7f8->leave($__internal_8ba5c2655e7bca04f04a053c3ad21ca2bfe93dce8d47488ee3244393206cb7f8_prof);

    }

    public function getTemplateName()
    {
        return "orders/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 38,  107 => 33,  95 => 27,  89 => 24,  82 => 20,  76 => 19,  70 => 18,  67 => 17,  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
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
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('orders_show', { 'id': order.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('orders_edit', { 'id': order.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('orders_new') }}\">Create a new order</a>
        </li>
    </ul>
{% endblock %}
", "orders/index.html.twig", "/home/nicolaescu/Workspace/CarRental/app/Resources/views/orders/index.html.twig");
    }
}
