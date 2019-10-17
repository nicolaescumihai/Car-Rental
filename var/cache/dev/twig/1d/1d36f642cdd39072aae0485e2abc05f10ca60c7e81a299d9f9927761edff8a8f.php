<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_7bfb6f4416db4103852416bf9cc8f18ed945ab49d808e9b0ae66fde720086ba6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_47e9f029644a4400d8718ad7177952c0c4f8e2eef6abd004e790df3152258bb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47e9f029644a4400d8718ad7177952c0c4f8e2eef6abd004e790df3152258bb8->enter($__internal_47e9f029644a4400d8718ad7177952c0c4f8e2eef6abd004e790df3152258bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_55703cb7726db0f6ca122387370e64790e15b89d33602a322bcc7048234b765c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55703cb7726db0f6ca122387370e64790e15b89d33602a322bcc7048234b765c->enter($__internal_55703cb7726db0f6ca122387370e64790e15b89d33602a322bcc7048234b765c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47e9f029644a4400d8718ad7177952c0c4f8e2eef6abd004e790df3152258bb8->leave($__internal_47e9f029644a4400d8718ad7177952c0c4f8e2eef6abd004e790df3152258bb8_prof);

        
        $__internal_55703cb7726db0f6ca122387370e64790e15b89d33602a322bcc7048234b765c->leave($__internal_55703cb7726db0f6ca122387370e64790e15b89d33602a322bcc7048234b765c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4f4aa7af5a36d839a93b6e4db2fa8fdc3e86b264f2ad65b7c63e31694b1b6ff7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f4aa7af5a36d839a93b6e4db2fa8fdc3e86b264f2ad65b7c63e31694b1b6ff7->enter($__internal_4f4aa7af5a36d839a93b6e4db2fa8fdc3e86b264f2ad65b7c63e31694b1b6ff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_50d5bb6d21332a6118bcd512ff5c16c30a3a5a7d7d26152556528d512adf4c15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50d5bb6d21332a6118bcd512ff5c16c30a3a5a7d7d26152556528d512adf4c15->enter($__internal_50d5bb6d21332a6118bcd512ff5c16c30a3a5a7d7d26152556528d512adf4c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_50d5bb6d21332a6118bcd512ff5c16c30a3a5a7d7d26152556528d512adf4c15->leave($__internal_50d5bb6d21332a6118bcd512ff5c16c30a3a5a7d7d26152556528d512adf4c15_prof);

        
        $__internal_4f4aa7af5a36d839a93b6e4db2fa8fdc3e86b264f2ad65b7c63e31694b1b6ff7->leave($__internal_4f4aa7af5a36d839a93b6e4db2fa8fdc3e86b264f2ad65b7c63e31694b1b6ff7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/home/nicolaescu/Workspace/Car-Rental/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
