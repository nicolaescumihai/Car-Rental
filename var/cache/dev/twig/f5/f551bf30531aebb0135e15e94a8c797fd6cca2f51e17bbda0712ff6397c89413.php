<?php

/* :extras:index.html.twig */
class __TwigTemplate_981f4ca182827944f43560d985c357c95ee8ce1f1ed8fa1cbe82d49b29ec14e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":extras:index.html.twig", 1);
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
        $__internal_e2d69e9ce2f7ca220ee7d48f86e511f0306d1fb1455f94420d5c77d68c96739d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2d69e9ce2f7ca220ee7d48f86e511f0306d1fb1455f94420d5c77d68c96739d->enter($__internal_e2d69e9ce2f7ca220ee7d48f86e511f0306d1fb1455f94420d5c77d68c96739d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":extras:index.html.twig"));

        $__internal_aaaa4f7419cbf0c4efaac8a994aaff68d94746a4af77218e6a6f48dc3f5cd3a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaaa4f7419cbf0c4efaac8a994aaff68d94746a4af77218e6a6f48dc3f5cd3a7->enter($__internal_aaaa4f7419cbf0c4efaac8a994aaff68d94746a4af77218e6a6f48dc3f5cd3a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":extras:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2d69e9ce2f7ca220ee7d48f86e511f0306d1fb1455f94420d5c77d68c96739d->leave($__internal_e2d69e9ce2f7ca220ee7d48f86e511f0306d1fb1455f94420d5c77d68c96739d_prof);

        
        $__internal_aaaa4f7419cbf0c4efaac8a994aaff68d94746a4af77218e6a6f48dc3f5cd3a7->leave($__internal_aaaa4f7419cbf0c4efaac8a994aaff68d94746a4af77218e6a6f48dc3f5cd3a7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7d535c62c70df36b705dc308e2fbf7ea9abac8aad8d9c184119a45581a9d477d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d535c62c70df36b705dc308e2fbf7ea9abac8aad8d9c184119a45581a9d477d->enter($__internal_7d535c62c70df36b705dc308e2fbf7ea9abac8aad8d9c184119a45581a9d477d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3e8817df80a276c68da6ee9375a6b8d34a864f921a62cd7a837778a8c3b6d8cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e8817df80a276c68da6ee9375a6b8d34a864f921a62cd7a837778a8c3b6d8cd->enter($__internal_3e8817df80a276c68da6ee9375a6b8d34a864f921a62cd7a837778a8c3b6d8cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Extras list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extras"] ?? $this->getContext($context, "extras")));
        foreach ($context['_seq'] as $context["_key"] => $context["extra"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("extras_show", array("id" => $this->getAttribute($context["extra"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["extra"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["extra"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["extra"], "description", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("extras_show", array("id" => $this->getAttribute($context["extra"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("extras_edit", array("id" => $this->getAttribute($context["extra"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extra'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("extras_new");
        echo "\">Create a new extra</a>
        </li>
    </ul>
";
        
        $__internal_3e8817df80a276c68da6ee9375a6b8d34a864f921a62cd7a837778a8c3b6d8cd->leave($__internal_3e8817df80a276c68da6ee9375a6b8d34a864f921a62cd7a837778a8c3b6d8cd_prof);

        
        $__internal_7d535c62c70df36b705dc308e2fbf7ea9abac8aad8d9c184119a45581a9d477d->leave($__internal_7d535c62c70df36b705dc308e2fbf7ea9abac8aad8d9c184119a45581a9d477d_prof);

    }

    public function getTemplateName()
    {
        return ":extras:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 38,  105 => 33,  93 => 27,  87 => 24,  80 => 20,  76 => 19,  70 => 18,  67 => 17,  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Extras list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for extra in extras %}
            <tr>
                <td><a href=\"{{ path('extras_show', { 'id': extra.id }) }}\">{{ extra.id }}</a></td>
                <td>{{ extra.name }}</td>
                <td>{{ extra.description }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('extras_show', { 'id': extra.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('extras_edit', { 'id': extra.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('extras_new') }}\">Create a new extra</a>
        </li>
    </ul>
{% endblock %}
", ":extras:index.html.twig", "/home/nicolaescu/Workspace/Car-Rental/app/Resources/views/extras/index.html.twig");
    }
}
