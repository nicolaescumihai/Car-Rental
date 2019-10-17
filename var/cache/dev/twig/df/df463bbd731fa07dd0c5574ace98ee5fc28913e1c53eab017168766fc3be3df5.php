<?php

/* :car:show.html.twig */
class __TwigTemplate_5a0d10ace0bc03880fdd212bea306afa0a346a9213b74e1fe8d26e28cd315c0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":car:show.html.twig", 1);
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
        $__internal_050e7798029d6ee5d599e442798a4318e819f8910e558d75f2894a7553552c6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_050e7798029d6ee5d599e442798a4318e819f8910e558d75f2894a7553552c6f->enter($__internal_050e7798029d6ee5d599e442798a4318e819f8910e558d75f2894a7553552c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":car:show.html.twig"));

        $__internal_bfd1495a0e93d759fe9bab50558444a6e9d1b23b00d6f712ce3c3adcd31c3dbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfd1495a0e93d759fe9bab50558444a6e9d1b23b00d6f712ce3c3adcd31c3dbe->enter($__internal_bfd1495a0e93d759fe9bab50558444a6e9d1b23b00d6f712ce3c3adcd31c3dbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":car:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_050e7798029d6ee5d599e442798a4318e819f8910e558d75f2894a7553552c6f->leave($__internal_050e7798029d6ee5d599e442798a4318e819f8910e558d75f2894a7553552c6f_prof);

        
        $__internal_bfd1495a0e93d759fe9bab50558444a6e9d1b23b00d6f712ce3c3adcd31c3dbe->leave($__internal_bfd1495a0e93d759fe9bab50558444a6e9d1b23b00d6f712ce3c3adcd31c3dbe_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e3ae09110f2c854ec04bb1a6e31183fb3fd07f7ad967edf93d585f7d3cb7894a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3ae09110f2c854ec04bb1a6e31183fb3fd07f7ad967edf93d585f7d3cb7894a->enter($__internal_e3ae09110f2c854ec04bb1a6e31183fb3fd07f7ad967edf93d585f7d3cb7894a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8c52af548b2589ff20402070f77119a5d7ab86d1d56a664435c91530a0537b8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c52af548b2589ff20402070f77119a5d7ab86d1d56a664435c91530a0537b8b->enter($__internal_8c52af548b2589ff20402070f77119a5d7ab86d1d56a664435c91530a0537b8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Car</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["car"] ?? $this->getContext($context, "car")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["car"] ?? $this->getContext($context, "car")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["car"] ?? $this->getContext($context, "car")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Rented</th>
                <td>";
        // line 22
        if ($this->getAttribute(($context["car"] ?? $this->getContext($context, "car")), "rented", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("car_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("car_edit", array("id" => $this->getAttribute(($context["car"] ?? $this->getContext($context, "car")), "id", array()))), "html", null, true);
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
        
        $__internal_8c52af548b2589ff20402070f77119a5d7ab86d1d56a664435c91530a0537b8b->leave($__internal_8c52af548b2589ff20402070f77119a5d7ab86d1d56a664435c91530a0537b8b_prof);

        
        $__internal_e3ae09110f2c854ec04bb1a6e31183fb3fd07f7ad967edf93d585f7d3cb7894a->leave($__internal_e3ae09110f2c854ec04bb1a6e31183fb3fd07f7ad967edf93d585f7d3cb7894a_prof);

    }

    public function getTemplateName()
    {
        return ":car:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 37,  104 => 35,  98 => 32,  92 => 29,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Car</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ car.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ car.name }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ car.description }}</td>
            </tr>
            <tr>
                <th>Rented</th>
                <td>{% if car.rented %}Yes{% else %}No{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('car_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('car_edit', { 'id': car.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":car:show.html.twig", "/home/nicolaescu/Workspace/Car-Rental/app/Resources/views/car/show.html.twig");
    }
}
