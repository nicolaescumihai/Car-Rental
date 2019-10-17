<?php

/* AppBundle:Admin:show_all_orders.html.twig */
class __TwigTemplate_f5a321966da19b1e896e8c0a32046b43272e9d0d700de5e62e662e154c687f4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Admin:show_all_orders.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_57792ba82703624097f08e80ab33a94d311cc0f10f55b52b3bbc3fb2b7e87576 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57792ba82703624097f08e80ab33a94d311cc0f10f55b52b3bbc3fb2b7e87576->enter($__internal_57792ba82703624097f08e80ab33a94d311cc0f10f55b52b3bbc3fb2b7e87576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:show_all_orders.html.twig"));

        $__internal_916e2774d1d2ae56104c5bbc4c9b90fbc30ec3c742f3360a6bc8a078eacd34ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_916e2774d1d2ae56104c5bbc4c9b90fbc30ec3c742f3360a6bc8a078eacd34ec->enter($__internal_916e2774d1d2ae56104c5bbc4c9b90fbc30ec3c742f3360a6bc8a078eacd34ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:show_all_orders.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57792ba82703624097f08e80ab33a94d311cc0f10f55b52b3bbc3fb2b7e87576->leave($__internal_57792ba82703624097f08e80ab33a94d311cc0f10f55b52b3bbc3fb2b7e87576_prof);

        
        $__internal_916e2774d1d2ae56104c5bbc4c9b90fbc30ec3c742f3360a6bc8a078eacd34ec->leave($__internal_916e2774d1d2ae56104c5bbc4c9b90fbc30ec3c742f3360a6bc8a078eacd34ec_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_38d58b8ecbfb611547c1a7a984e6685567ff4c94ac27b95d6cd892884d0e81e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38d58b8ecbfb611547c1a7a984e6685567ff4c94ac27b95d6cd892884d0e81e4->enter($__internal_38d58b8ecbfb611547c1a7a984e6685567ff4c94ac27b95d6cd892884d0e81e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7ba2591cda27100a34899411fd8c46e31e31064145db98d3d5c8ec6bfb372b78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ba2591cda27100a34899411fd8c46e31e31064145db98d3d5c8ec6bfb372b78->enter($__internal_7ba2591cda27100a34899411fd8c46e31e31064145db98d3d5c8ec6bfb372b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Admin:showAllOrders";
        
        $__internal_7ba2591cda27100a34899411fd8c46e31e31064145db98d3d5c8ec6bfb372b78->leave($__internal_7ba2591cda27100a34899411fd8c46e31e31064145db98d3d5c8ec6bfb372b78_prof);

        
        $__internal_38d58b8ecbfb611547c1a7a984e6685567ff4c94ac27b95d6cd892884d0e81e4->leave($__internal_38d58b8ecbfb611547c1a7a984e6685567ff4c94ac27b95d6cd892884d0e81e4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_43eab87b383c5fcfb26e68c46f2b6972a04387127008ad674800f6d499f3bdfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43eab87b383c5fcfb26e68c46f2b6972a04387127008ad674800f6d499f3bdfc->enter($__internal_43eab87b383c5fcfb26e68c46f2b6972a04387127008ad674800f6d499f3bdfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c4b8675c2d725465734748e67b27e86edbb5ec18c70d103fd5c6ef3b6073c981 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4b8675c2d725465734748e67b27e86edbb5ec18c70d103fd5c6ef3b6073c981->enter($__internal_c4b8675c2d725465734748e67b27e86edbb5ec18c70d103fd5c6ef3b6073c981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Admin:showAllOrders page</h1>
";
        
        $__internal_c4b8675c2d725465734748e67b27e86edbb5ec18c70d103fd5c6ef3b6073c981->leave($__internal_c4b8675c2d725465734748e67b27e86edbb5ec18c70d103fd5c6ef3b6073c981_prof);

        
        $__internal_43eab87b383c5fcfb26e68c46f2b6972a04387127008ad674800f6d499f3bdfc->leave($__internal_43eab87b383c5fcfb26e68c46f2b6972a04387127008ad674800f6d499f3bdfc_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Admin:show_all_orders.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %}AppBundle:Admin:showAllOrders{% endblock %}

{% block body %}
<h1>Welcome to the Admin:showAllOrders page</h1>
{% endblock %}
", "AppBundle:Admin:show_all_orders.html.twig", "/home/nicolaescu/Workspace/Car-Rental/src/AppBundle/Resources/views/Admin/show_all_orders.html.twig");
    }
}
