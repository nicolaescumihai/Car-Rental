<?php

/* :orders:show.html.twig */
class __TwigTemplate_4419bd8f13414ccbfd93b235598e862cdb5424d7fe561e95f14e36157e130793 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":orders:show.html.twig", 1);
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
        $__internal_6d7371e4db1a1c634172782ef5285e3c4f69b63a88ca8da4c5b9eb7181955737 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d7371e4db1a1c634172782ef5285e3c4f69b63a88ca8da4c5b9eb7181955737->enter($__internal_6d7371e4db1a1c634172782ef5285e3c4f69b63a88ca8da4c5b9eb7181955737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":orders:show.html.twig"));

        $__internal_7798b33b9debe1000d703a2c4bbcf8d1a083cff2d20f04689ff499e18e1b47f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7798b33b9debe1000d703a2c4bbcf8d1a083cff2d20f04689ff499e18e1b47f9->enter($__internal_7798b33b9debe1000d703a2c4bbcf8d1a083cff2d20f04689ff499e18e1b47f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":orders:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d7371e4db1a1c634172782ef5285e3c4f69b63a88ca8da4c5b9eb7181955737->leave($__internal_6d7371e4db1a1c634172782ef5285e3c4f69b63a88ca8da4c5b9eb7181955737_prof);

        
        $__internal_7798b33b9debe1000d703a2c4bbcf8d1a083cff2d20f04689ff499e18e1b47f9->leave($__internal_7798b33b9debe1000d703a2c4bbcf8d1a083cff2d20f04689ff499e18e1b47f9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7b4a17939e2f45823d631d19bd30efbf6bec4b18fff94654a2a2d4360e549e9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b4a17939e2f45823d631d19bd30efbf6bec4b18fff94654a2a2d4360e549e9f->enter($__internal_7b4a17939e2f45823d631d19bd30efbf6bec4b18fff94654a2a2d4360e549e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_df2382f0a92a3a5f22145a5adc4f8d33c6e5380f1bdb8441b4a0af00ca616003 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df2382f0a92a3a5f22145a5adc4f8d33c6e5380f1bdb8441b4a0af00ca616003->enter($__internal_df2382f0a92a3a5f22145a5adc4f8d33c6e5380f1bdb8441b4a0af00ca616003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Order</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 14
        if ($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "date", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "date", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "price", array()), "html", null, true);
        echo "</td>
            </tr>
            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extras"] ?? $this->getContext($context, "extras")));
        foreach ($context['_seq'] as $context["_key"] => $context["extra"]) {
            // line 21
            echo "                <tr>

                    <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["extra"], "name", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["extra"], "description", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["extra"], "price", array()), "html", null, true);
            echo "</td>
                    <td>
                        <a class=\"btn btn-primary\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("orders_new2", array("extraId" => $this->getAttribute($context["extra"], "id", array()), "orderId" => $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "id", array()))), "html", null, true);
            echo "\" role=\"button\">Add</a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extra'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
        </tbody>
    </table>
    <a class=\"btn btn-primary\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_orders_finishpay", array("orderId" => $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "id", array()))), "html", null, true);
        echo "\" role=\"button\">Add</a>
";
        
        $__internal_df2382f0a92a3a5f22145a5adc4f8d33c6e5380f1bdb8441b4a0af00ca616003->leave($__internal_df2382f0a92a3a5f22145a5adc4f8d33c6e5380f1bdb8441b4a0af00ca616003_prof);

        
        $__internal_7b4a17939e2f45823d631d19bd30efbf6bec4b18fff94654a2a2d4360e549e9f->leave($__internal_7b4a17939e2f45823d631d19bd30efbf6bec4b18fff94654a2a2d4360e549e9f_prof);

    }

    public function getTemplateName()
    {
        return ":orders:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 34,  109 => 31,  99 => 27,  94 => 25,  90 => 24,  86 => 23,  82 => 21,  78 => 20,  73 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Order</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ order.id }}</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>{% if order.date %}{{ order.date|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>{{ order.price }}</td>
            </tr>
            {% for extra in extras %}
                <tr>

                    <td>{{ extra.name }}</td>
                    <td>{{ extra.description }}</td>
                    <td>{{ extra.price }}</td>
                    <td>
                        <a class=\"btn btn-primary\" href=\"{{ path('orders_new2', {extraId: extra.id, orderId: order.id}) }}\" role=\"button\">Add</a>
                    </td>
                </tr>
            {% endfor %}

        </tbody>
    </table>
    <a class=\"btn btn-primary\" href=\"{{ path('app_orders_finishpay', {orderId: order.id}) }}\" role=\"button\">Add</a>
{% endblock %}
", ":orders:show.html.twig", "/home/nicolaescu/Workspace/Car-Rental/app/Resources/views/orders/show.html.twig");
    }
}
