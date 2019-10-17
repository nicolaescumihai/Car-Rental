<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_8668eb6259d188eb9dff072483e7894d1cbc028330b9c0b7877eefec65be160e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_9bd683621357fc744337d9e3330fffdbbed6c25f9b7fc8ff38ca319d6a3fa56d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bd683621357fc744337d9e3330fffdbbed6c25f9b7fc8ff38ca319d6a3fa56d->enter($__internal_9bd683621357fc744337d9e3330fffdbbed6c25f9b7fc8ff38ca319d6a3fa56d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_392f931d5711afaad6ca2df91a0a149deaf994ea3db7fd5923f036e5fa5d2ebc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_392f931d5711afaad6ca2df91a0a149deaf994ea3db7fd5923f036e5fa5d2ebc->enter($__internal_392f931d5711afaad6ca2df91a0a149deaf994ea3db7fd5923f036e5fa5d2ebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9bd683621357fc744337d9e3330fffdbbed6c25f9b7fc8ff38ca319d6a3fa56d->leave($__internal_9bd683621357fc744337d9e3330fffdbbed6c25f9b7fc8ff38ca319d6a3fa56d_prof);

        
        $__internal_392f931d5711afaad6ca2df91a0a149deaf994ea3db7fd5923f036e5fa5d2ebc->leave($__internal_392f931d5711afaad6ca2df91a0a149deaf994ea3db7fd5923f036e5fa5d2ebc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_613edb80a9cd9a3dc064430a0553cfd3a68c8a500a71362684a50b3eca887b48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_613edb80a9cd9a3dc064430a0553cfd3a68c8a500a71362684a50b3eca887b48->enter($__internal_613edb80a9cd9a3dc064430a0553cfd3a68c8a500a71362684a50b3eca887b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bee06c1b9ccb9ccf01bd872e615104da3263545e6048882127114250f0c7796b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bee06c1b9ccb9ccf01bd872e615104da3263545e6048882127114250f0c7796b->enter($__internal_bee06c1b9ccb9ccf01bd872e615104da3263545e6048882127114250f0c7796b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_bee06c1b9ccb9ccf01bd872e615104da3263545e6048882127114250f0c7796b->leave($__internal_bee06c1b9ccb9ccf01bd872e615104da3263545e6048882127114250f0c7796b_prof);

        
        $__internal_613edb80a9cd9a3dc064430a0553cfd3a68c8a500a71362684a50b3eca887b48->leave($__internal_613edb80a9cd9a3dc064430a0553cfd3a68c8a500a71362684a50b3eca887b48_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "/home/nicolaescu/Workspace/CarRental/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
