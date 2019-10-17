<?php

/* AppBundle:Admin:show_all_users.html.twig */
class __TwigTemplate_690f493ef66fe78aac9c68896ab1ba99b970de7d2846a91fc61ce9021d43c903 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Admin:show_all_users.html.twig", 1);
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
        $__internal_3ddd6e432f28d2dfdc7599b6a41e69d3e7719292b76e5da6f3032b28ecab0e5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ddd6e432f28d2dfdc7599b6a41e69d3e7719292b76e5da6f3032b28ecab0e5d->enter($__internal_3ddd6e432f28d2dfdc7599b6a41e69d3e7719292b76e5da6f3032b28ecab0e5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:show_all_users.html.twig"));

        $__internal_44debc92ed384e281964521b0f18424b407afd0bb570c221bc84b0db41d5b312 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44debc92ed384e281964521b0f18424b407afd0bb570c221bc84b0db41d5b312->enter($__internal_44debc92ed384e281964521b0f18424b407afd0bb570c221bc84b0db41d5b312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:show_all_users.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ddd6e432f28d2dfdc7599b6a41e69d3e7719292b76e5da6f3032b28ecab0e5d->leave($__internal_3ddd6e432f28d2dfdc7599b6a41e69d3e7719292b76e5da6f3032b28ecab0e5d_prof);

        
        $__internal_44debc92ed384e281964521b0f18424b407afd0bb570c221bc84b0db41d5b312->leave($__internal_44debc92ed384e281964521b0f18424b407afd0bb570c221bc84b0db41d5b312_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4a6a946cb1d0459b785f569488549a727d859d25e9a2b63bf6fd8c75b778b23d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a6a946cb1d0459b785f569488549a727d859d25e9a2b63bf6fd8c75b778b23d->enter($__internal_4a6a946cb1d0459b785f569488549a727d859d25e9a2b63bf6fd8c75b778b23d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e33902ec88ef78a617abdb889f477e534fe0dd99220b9751a223a110e66fc9e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e33902ec88ef78a617abdb889f477e534fe0dd99220b9751a223a110e66fc9e3->enter($__internal_e33902ec88ef78a617abdb889f477e534fe0dd99220b9751a223a110e66fc9e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Admin:showAllUsers";
        
        $__internal_e33902ec88ef78a617abdb889f477e534fe0dd99220b9751a223a110e66fc9e3->leave($__internal_e33902ec88ef78a617abdb889f477e534fe0dd99220b9751a223a110e66fc9e3_prof);

        
        $__internal_4a6a946cb1d0459b785f569488549a727d859d25e9a2b63bf6fd8c75b778b23d->leave($__internal_4a6a946cb1d0459b785f569488549a727d859d25e9a2b63bf6fd8c75b778b23d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_aee0b7ed8a85d77308aaa113b8252f0be4382529fffc6b0656ebce29bb99f3da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aee0b7ed8a85d77308aaa113b8252f0be4382529fffc6b0656ebce29bb99f3da->enter($__internal_aee0b7ed8a85d77308aaa113b8252f0be4382529fffc6b0656ebce29bb99f3da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bfe6288c5a7035658a084222e6dbec92d5c2a1b297af91d2cef54b77be4d3101 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfe6288c5a7035658a084222e6dbec92d5c2a1b297af91d2cef54b77be4d3101->enter($__internal_bfe6288c5a7035658a084222e6dbec92d5c2a1b297af91d2cef54b77be4d3101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Admin:showAllUsers page</h1>
";
        
        $__internal_bfe6288c5a7035658a084222e6dbec92d5c2a1b297af91d2cef54b77be4d3101->leave($__internal_bfe6288c5a7035658a084222e6dbec92d5c2a1b297af91d2cef54b77be4d3101_prof);

        
        $__internal_aee0b7ed8a85d77308aaa113b8252f0be4382529fffc6b0656ebce29bb99f3da->leave($__internal_aee0b7ed8a85d77308aaa113b8252f0be4382529fffc6b0656ebce29bb99f3da_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Admin:show_all_users.html.twig";
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

{% block title %}AppBundle:Admin:showAllUsers{% endblock %}

{% block body %}
<h1>Welcome to the Admin:showAllUsers page</h1>
{% endblock %}
", "AppBundle:Admin:show_all_users.html.twig", "/home/nicolaescu/Workspace/Car-Rental/src/AppBundle/Resources/views/Admin/show_all_users.html.twig");
    }
}
