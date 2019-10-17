<?php

/* :user:new.html.twig */
class __TwigTemplate_46dc8e7e1c4701c0389f140ecc5923ff308bc425bdfd728461efedb8c03de0d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:new.html.twig", 1);
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
        $__internal_93121ccbf9221d0dc7f08d2ef04d6a7875968863954659641a5a00d3fc690353 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93121ccbf9221d0dc7f08d2ef04d6a7875968863954659641a5a00d3fc690353->enter($__internal_93121ccbf9221d0dc7f08d2ef04d6a7875968863954659641a5a00d3fc690353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:new.html.twig"));

        $__internal_2a8320657455d231ae4a42249224916ad357596f48d0c9afc85b655b96e356a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a8320657455d231ae4a42249224916ad357596f48d0c9afc85b655b96e356a1->enter($__internal_2a8320657455d231ae4a42249224916ad357596f48d0c9afc85b655b96e356a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93121ccbf9221d0dc7f08d2ef04d6a7875968863954659641a5a00d3fc690353->leave($__internal_93121ccbf9221d0dc7f08d2ef04d6a7875968863954659641a5a00d3fc690353_prof);

        
        $__internal_2a8320657455d231ae4a42249224916ad357596f48d0c9afc85b655b96e356a1->leave($__internal_2a8320657455d231ae4a42249224916ad357596f48d0c9afc85b655b96e356a1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c0a141d7873ca83486ef29a5ee9c53356067380dadf97ed19fb415af5ed76e6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0a141d7873ca83486ef29a5ee9c53356067380dadf97ed19fb415af5ed76e6e->enter($__internal_c0a141d7873ca83486ef29a5ee9c53356067380dadf97ed19fb415af5ed76e6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5f1e01a1253a6a95da09dc3d94eab91e29d5feef84e30b1ce6fd64782f08a684 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f1e01a1253a6a95da09dc3d94eab91e29d5feef84e30b1ce6fd64782f08a684->enter($__internal_5f1e01a1253a6a95da09dc3d94eab91e29d5feef84e30b1ce6fd64782f08a684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_5f1e01a1253a6a95da09dc3d94eab91e29d5feef84e30b1ce6fd64782f08a684->leave($__internal_5f1e01a1253a6a95da09dc3d94eab91e29d5feef84e30b1ce6fd64782f08a684_prof);

        
        $__internal_c0a141d7873ca83486ef29a5ee9c53356067380dadf97ed19fb415af5ed76e6e->leave($__internal_c0a141d7873ca83486ef29a5ee9c53356067380dadf97ed19fb415af5ed76e6e_prof);

    }

    public function getTemplateName()
    {
        return ":user:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>User creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('user_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":user:new.html.twig", "/home/nicolaescu/Workspace/Car-Rental/app/Resources/views/user/new.html.twig");
    }
}
