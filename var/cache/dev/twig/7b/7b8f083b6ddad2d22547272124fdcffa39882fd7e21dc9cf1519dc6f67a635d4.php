<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_38232e67e859d117ba5145d34389230ed18a0230130b049ce8b2d2534e59b202 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_88d3f32b200bdb91f8aa6cd919f31e61c6e04ebb686f2b04644a5fc0791ff53c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88d3f32b200bdb91f8aa6cd919f31e61c6e04ebb686f2b04644a5fc0791ff53c->enter($__internal_88d3f32b200bdb91f8aa6cd919f31e61c6e04ebb686f2b04644a5fc0791ff53c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_f53c4030708ed091c2ad6353e64dfd8930514a0684cb10ff99015c729b92218a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f53c4030708ed091c2ad6353e64dfd8930514a0684cb10ff99015c729b92218a->enter($__internal_f53c4030708ed091c2ad6353e64dfd8930514a0684cb10ff99015c729b92218a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88d3f32b200bdb91f8aa6cd919f31e61c6e04ebb686f2b04644a5fc0791ff53c->leave($__internal_88d3f32b200bdb91f8aa6cd919f31e61c6e04ebb686f2b04644a5fc0791ff53c_prof);

        
        $__internal_f53c4030708ed091c2ad6353e64dfd8930514a0684cb10ff99015c729b92218a->leave($__internal_f53c4030708ed091c2ad6353e64dfd8930514a0684cb10ff99015c729b92218a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9aa8dfbbc50c6c72b76dc1d2e35fe0d1992cffb4db79191dbf0b9c63d7e2170d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9aa8dfbbc50c6c72b76dc1d2e35fe0d1992cffb4db79191dbf0b9c63d7e2170d->enter($__internal_9aa8dfbbc50c6c72b76dc1d2e35fe0d1992cffb4db79191dbf0b9c63d7e2170d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9ac73defbcfea7522e090350eff77cf781b4a6492b646598013bcdc2fe23210c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ac73defbcfea7522e090350eff77cf781b4a6492b646598013bcdc2fe23210c->enter($__internal_9ac73defbcfea7522e090350eff77cf781b4a6492b646598013bcdc2fe23210c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_9ac73defbcfea7522e090350eff77cf781b4a6492b646598013bcdc2fe23210c->leave($__internal_9ac73defbcfea7522e090350eff77cf781b4a6492b646598013bcdc2fe23210c_prof);

        
        $__internal_9aa8dfbbc50c6c72b76dc1d2e35fe0d1992cffb4db79191dbf0b9c63d7e2170d->leave($__internal_9aa8dfbbc50c6c72b76dc1d2e35fe0d1992cffb4db79191dbf0b9c63d7e2170d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/home/nicolaescu/Workspace/Car-Rental/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
