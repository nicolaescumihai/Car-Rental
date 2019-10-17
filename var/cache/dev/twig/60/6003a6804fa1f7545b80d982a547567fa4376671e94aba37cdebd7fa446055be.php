<?php

/* :orders:index.html.twig */
class __TwigTemplate_4b0d4d4c4eee0591472a9766dde5ec3d652e7d6c0fd68c490a8ba654593caab9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":orders:index.html.twig", 1);
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
        $__internal_f094838825ff6636d656d4cebfce6137d4d2f1f8c81a38b81d952cf72c97ea52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f094838825ff6636d656d4cebfce6137d4d2f1f8c81a38b81d952cf72c97ea52->enter($__internal_f094838825ff6636d656d4cebfce6137d4d2f1f8c81a38b81d952cf72c97ea52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":orders:index.html.twig"));

        $__internal_dbd72d955ccc9c0bc7a9df487766f7c8651af513721187f7c19e450e7ebdafba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbd72d955ccc9c0bc7a9df487766f7c8651af513721187f7c19e450e7ebdafba->enter($__internal_dbd72d955ccc9c0bc7a9df487766f7c8651af513721187f7c19e450e7ebdafba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":orders:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f094838825ff6636d656d4cebfce6137d4d2f1f8c81a38b81d952cf72c97ea52->leave($__internal_f094838825ff6636d656d4cebfce6137d4d2f1f8c81a38b81d952cf72c97ea52_prof);

        
        $__internal_dbd72d955ccc9c0bc7a9df487766f7c8651af513721187f7c19e450e7ebdafba->leave($__internal_dbd72d955ccc9c0bc7a9df487766f7c8651af513721187f7c19e450e7ebdafba_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_938555a6b332c6674fd7ff351a849a7138495aa5df3f30486bcc6e0b5e19a369 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_938555a6b332c6674fd7ff351a849a7138495aa5df3f30486bcc6e0b5e19a369->enter($__internal_938555a6b332c6674fd7ff351a849a7138495aa5df3f30486bcc6e0b5e19a369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2b06d3c70fa285998e3de91f52cc995295dda49638e0a3ee6631b7e84f982a72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b06d3c70fa285998e3de91f52cc995295dda49638e0a3ee6631b7e84f982a72->enter($__internal_2b06d3c70fa285998e3de91f52cc995295dda49638e0a3ee6631b7e84f982a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2b06d3c70fa285998e3de91f52cc995295dda49638e0a3ee6631b7e84f982a72->leave($__internal_2b06d3c70fa285998e3de91f52cc995295dda49638e0a3ee6631b7e84f982a72_prof);

        
        $__internal_938555a6b332c6674fd7ff351a849a7138495aa5df3f30486bcc6e0b5e19a369->leave($__internal_938555a6b332c6674fd7ff351a849a7138495aa5df3f30486bcc6e0b5e19a369_prof);

    }

    public function getTemplateName()
    {
        return ":orders:index.html.twig";
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
", ":orders:index.html.twig", "/home/nicolaescu/Workspace/Car-Rental/app/Resources/views/orders/index.html.twig");
    }
}
