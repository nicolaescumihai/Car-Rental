<?php

/* orders/show.html.twig */
class __TwigTemplate_4419bd8f13414ccbfd93b235598e862cdb5424d7fe561e95f14e36157e130793 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "orders/show.html.twig", 1);
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
        $__internal_92abefdaea256721b62110b0f820f087412fd2441677b9844d4b380b1a07b3e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92abefdaea256721b62110b0f820f087412fd2441677b9844d4b380b1a07b3e8->enter($__internal_92abefdaea256721b62110b0f820f087412fd2441677b9844d4b380b1a07b3e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "orders/show.html.twig"));

        $__internal_e2c6cdcb123e0863de18ed585d77d79ef673139409ecedfee5bc0407c7eb9824 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2c6cdcb123e0863de18ed585d77d79ef673139409ecedfee5bc0407c7eb9824->enter($__internal_e2c6cdcb123e0863de18ed585d77d79ef673139409ecedfee5bc0407c7eb9824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "orders/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92abefdaea256721b62110b0f820f087412fd2441677b9844d4b380b1a07b3e8->leave($__internal_92abefdaea256721b62110b0f820f087412fd2441677b9844d4b380b1a07b3e8_prof);

        
        $__internal_e2c6cdcb123e0863de18ed585d77d79ef673139409ecedfee5bc0407c7eb9824->leave($__internal_e2c6cdcb123e0863de18ed585d77d79ef673139409ecedfee5bc0407c7eb9824_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a22e75a1fd1849a420d772e4c9102c57434bc44dc26314d5568b3d2fc5526f10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a22e75a1fd1849a420d772e4c9102c57434bc44dc26314d5568b3d2fc5526f10->enter($__internal_a22e75a1fd1849a420d772e4c9102c57434bc44dc26314d5568b3d2fc5526f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_39afacf96e464d0a68421400b161f2eb6a5665687356bfe036381706cbc5a49d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39afacf96e464d0a68421400b161f2eb6a5665687356bfe036381706cbc5a49d->enter($__internal_39afacf96e464d0a68421400b161f2eb6a5665687356bfe036381706cbc5a49d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_39afacf96e464d0a68421400b161f2eb6a5665687356bfe036381706cbc5a49d->leave($__internal_39afacf96e464d0a68421400b161f2eb6a5665687356bfe036381706cbc5a49d_prof);

        
        $__internal_a22e75a1fd1849a420d772e4c9102c57434bc44dc26314d5568b3d2fc5526f10->leave($__internal_a22e75a1fd1849a420d772e4c9102c57434bc44dc26314d5568b3d2fc5526f10_prof);

    }

    public function getTemplateName()
    {
        return "orders/show.html.twig";
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
", "orders/show.html.twig", "/home/nicolaescu/Workspace/CarRental/app/Resources/views/orders/show.html.twig");
    }
}
