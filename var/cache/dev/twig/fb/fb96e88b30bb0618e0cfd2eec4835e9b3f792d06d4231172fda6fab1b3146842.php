<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_6b14eb773c186c1d96d8cb59b58016bad0748c1a6df9c08305834970e644dfb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_3dd0acbb6bf3c10be2cb4982fe61a603b6a1f2ad2ce694a1eb7a8d01f1e8c018 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dd0acbb6bf3c10be2cb4982fe61a603b6a1f2ad2ce694a1eb7a8d01f1e8c018->enter($__internal_3dd0acbb6bf3c10be2cb4982fe61a603b6a1f2ad2ce694a1eb7a8d01f1e8c018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_e9bac2a70225c4458009bd04dccfd81d42b4d8f65485e73c02eca1d0d2811f53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9bac2a70225c4458009bd04dccfd81d42b4d8f65485e73c02eca1d0d2811f53->enter($__internal_e9bac2a70225c4458009bd04dccfd81d42b4d8f65485e73c02eca1d0d2811f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3dd0acbb6bf3c10be2cb4982fe61a603b6a1f2ad2ce694a1eb7a8d01f1e8c018->leave($__internal_3dd0acbb6bf3c10be2cb4982fe61a603b6a1f2ad2ce694a1eb7a8d01f1e8c018_prof);

        
        $__internal_e9bac2a70225c4458009bd04dccfd81d42b4d8f65485e73c02eca1d0d2811f53->leave($__internal_e9bac2a70225c4458009bd04dccfd81d42b4d8f65485e73c02eca1d0d2811f53_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b823ef96c964916e6496f047428fb4506a1dbc6785ba8331f8b8aebf8115190f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b823ef96c964916e6496f047428fb4506a1dbc6785ba8331f8b8aebf8115190f->enter($__internal_b823ef96c964916e6496f047428fb4506a1dbc6785ba8331f8b8aebf8115190f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0c8abb691495008079d7bdb8f82451eb9597af627b19d481b7a2d5351226380a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c8abb691495008079d7bdb8f82451eb9597af627b19d481b7a2d5351226380a->enter($__internal_0c8abb691495008079d7bdb8f82451eb9597af627b19d481b7a2d5351226380a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_0c8abb691495008079d7bdb8f82451eb9597af627b19d481b7a2d5351226380a->leave($__internal_0c8abb691495008079d7bdb8f82451eb9597af627b19d481b7a2d5351226380a_prof);

        
        $__internal_b823ef96c964916e6496f047428fb4506a1dbc6785ba8331f8b8aebf8115190f->leave($__internal_b823ef96c964916e6496f047428fb4506a1dbc6785ba8331f8b8aebf8115190f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/home/nicolaescu/Workspace/CarRental/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
