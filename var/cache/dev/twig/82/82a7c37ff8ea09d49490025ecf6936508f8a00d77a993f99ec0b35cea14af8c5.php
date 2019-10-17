<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_8668eb6259d188eb9dff072483e7894d1cbc028330b9c0b7877eefec65be160e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_dc77e6c3d5368c9d1f58a51d66b54e73c1b90a74120abf25d9af84695a8621c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc77e6c3d5368c9d1f58a51d66b54e73c1b90a74120abf25d9af84695a8621c4->enter($__internal_dc77e6c3d5368c9d1f58a51d66b54e73c1b90a74120abf25d9af84695a8621c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_63c80c538e54f31a005b34fa70f62fb5999e117ae3803aa5dbd1c35a5249a04c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63c80c538e54f31a005b34fa70f62fb5999e117ae3803aa5dbd1c35a5249a04c->enter($__internal_63c80c538e54f31a005b34fa70f62fb5999e117ae3803aa5dbd1c35a5249a04c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc77e6c3d5368c9d1f58a51d66b54e73c1b90a74120abf25d9af84695a8621c4->leave($__internal_dc77e6c3d5368c9d1f58a51d66b54e73c1b90a74120abf25d9af84695a8621c4_prof);

        
        $__internal_63c80c538e54f31a005b34fa70f62fb5999e117ae3803aa5dbd1c35a5249a04c->leave($__internal_63c80c538e54f31a005b34fa70f62fb5999e117ae3803aa5dbd1c35a5249a04c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_791e720d0466220ec1325913e9c1cbede45076b1c63d0afbcca98613379dd0e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_791e720d0466220ec1325913e9c1cbede45076b1c63d0afbcca98613379dd0e0->enter($__internal_791e720d0466220ec1325913e9c1cbede45076b1c63d0afbcca98613379dd0e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_62c60c9f1b4d566caaf3d89da17ca524248fabd1f03a05d67bc4e7b055ac5a84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62c60c9f1b4d566caaf3d89da17ca524248fabd1f03a05d67bc4e7b055ac5a84->enter($__internal_62c60c9f1b4d566caaf3d89da17ca524248fabd1f03a05d67bc4e7b055ac5a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_62c60c9f1b4d566caaf3d89da17ca524248fabd1f03a05d67bc4e7b055ac5a84->leave($__internal_62c60c9f1b4d566caaf3d89da17ca524248fabd1f03a05d67bc4e7b055ac5a84_prof);

        
        $__internal_791e720d0466220ec1325913e9c1cbede45076b1c63d0afbcca98613379dd0e0->leave($__internal_791e720d0466220ec1325913e9c1cbede45076b1c63d0afbcca98613379dd0e0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
", "FOSUserBundle:Registration:register.html.twig", "/home/nicolaescu/Workspace/Car-Rental/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
