<?php

/* :user:show.html.twig */
class __TwigTemplate_2e34759d2c84ccf986348410294be87092e89d4ce8f38c508308c6f8fbb10104 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:show.html.twig", 1);
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
        $__internal_b36b4b2a903aa4950ceae49c8071eb531182dbdff3b872e1b1434b9108ab31bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b36b4b2a903aa4950ceae49c8071eb531182dbdff3b872e1b1434b9108ab31bd->enter($__internal_b36b4b2a903aa4950ceae49c8071eb531182dbdff3b872e1b1434b9108ab31bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:show.html.twig"));

        $__internal_ef5efc98f26e13b959e626385117f76b022832815aa5fdbc010622fbaaa05240 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef5efc98f26e13b959e626385117f76b022832815aa5fdbc010622fbaaa05240->enter($__internal_ef5efc98f26e13b959e626385117f76b022832815aa5fdbc010622fbaaa05240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b36b4b2a903aa4950ceae49c8071eb531182dbdff3b872e1b1434b9108ab31bd->leave($__internal_b36b4b2a903aa4950ceae49c8071eb531182dbdff3b872e1b1434b9108ab31bd_prof);

        
        $__internal_ef5efc98f26e13b959e626385117f76b022832815aa5fdbc010622fbaaa05240->leave($__internal_ef5efc98f26e13b959e626385117f76b022832815aa5fdbc010622fbaaa05240_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b62f1aea21f62dbff9abf9e7483acbca486d458ddc0c98ac697916a0f097ae7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b62f1aea21f62dbff9abf9e7483acbca486d458ddc0c98ac697916a0f097ae7->enter($__internal_4b62f1aea21f62dbff9abf9e7483acbca486d458ddc0c98ac697916a0f097ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1cff737bee0e912f7acc4c958d3047ce8ca86df153b68af6292cb382a814b84e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cff737bee0e912f7acc4c958d3047ce8ca86df153b68af6292cb382a814b84e->enter($__internal_1cff737bee0e912f7acc4c958d3047ce8ca86df153b68af6292cb382a814b84e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Password</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "password", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Roll</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "roll", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("id" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_1cff737bee0e912f7acc4c958d3047ce8ca86df153b68af6292cb382a814b84e->leave($__internal_1cff737bee0e912f7acc4c958d3047ce8ca86df153b68af6292cb382a814b84e_prof);

        
        $__internal_4b62f1aea21f62dbff9abf9e7483acbca486d458ddc0c98ac697916a0f097ae7->leave($__internal_4b62f1aea21f62dbff9abf9e7483acbca486d458ddc0c98ac697916a0f097ae7_prof);

    }

    public function getTemplateName()
    {
        return ":user:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 37,  100 => 35,  94 => 32,  88 => 29,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>User</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ user.id }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ user.email }}</td>
            </tr>
            <tr>
                <th>Password</th>
                <td>{{ user.password }}</td>
            </tr>
            <tr>
                <th>Roll</th>
                <td>{{ user.roll }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('user_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('user_edit', { 'id': user.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":user:show.html.twig", "/home/nicolaescu/Workspace/Car-Rental/app/Resources/views/user/show.html.twig");
    }
}
