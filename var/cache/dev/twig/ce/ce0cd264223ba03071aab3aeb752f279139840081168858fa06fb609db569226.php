<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_819eb2e490eaf84237afb7729ebd1410b482a390a1b223021fcb416afdb549f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_346655e4c0100ca4f4ff56d48934ea35b5db05abab01423f83466d564b667788 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_346655e4c0100ca4f4ff56d48934ea35b5db05abab01423f83466d564b667788->enter($__internal_346655e4c0100ca4f4ff56d48934ea35b5db05abab01423f83466d564b667788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_62e40a75a4815384cd36761421cd582e699042fdb2afeee8cd7484e12c069bf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62e40a75a4815384cd36761421cd582e699042fdb2afeee8cd7484e12c069bf8->enter($__internal_62e40a75a4815384cd36761421cd582e699042fdb2afeee8cd7484e12c069bf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_346655e4c0100ca4f4ff56d48934ea35b5db05abab01423f83466d564b667788->leave($__internal_346655e4c0100ca4f4ff56d48934ea35b5db05abab01423f83466d564b667788_prof);

        
        $__internal_62e40a75a4815384cd36761421cd582e699042fdb2afeee8cd7484e12c069bf8->leave($__internal_62e40a75a4815384cd36761421cd582e699042fdb2afeee8cd7484e12c069bf8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_22625a139394f961c1ab2746794e649b36ec96405ec65efc3766c39b99a4cfb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22625a139394f961c1ab2746794e649b36ec96405ec65efc3766c39b99a4cfb9->enter($__internal_22625a139394f961c1ab2746794e649b36ec96405ec65efc3766c39b99a4cfb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_91a2292dfaf4182a96532397badaa942dee7dd229c1682df2a33ae1996448fa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91a2292dfaf4182a96532397badaa942dee7dd229c1682df2a33ae1996448fa4->enter($__internal_91a2292dfaf4182a96532397badaa942dee7dd229c1682df2a33ae1996448fa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_91a2292dfaf4182a96532397badaa942dee7dd229c1682df2a33ae1996448fa4->leave($__internal_91a2292dfaf4182a96532397badaa942dee7dd229c1682df2a33ae1996448fa4_prof);

        
        $__internal_22625a139394f961c1ab2746794e649b36ec96405ec65efc3766c39b99a4cfb9->leave($__internal_22625a139394f961c1ab2746794e649b36ec96405ec65efc3766c39b99a4cfb9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/home/nicolaescu/Workspace/Car-Rental/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
