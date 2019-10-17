<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_6b14eb773c186c1d96d8cb59b58016bad0748c1a6df9c08305834970e644dfb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_563dbf2f88aac5f8d1a65067baeed5d647a92e7571c05b2e18729e78c2c89f7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_563dbf2f88aac5f8d1a65067baeed5d647a92e7571c05b2e18729e78c2c89f7d->enter($__internal_563dbf2f88aac5f8d1a65067baeed5d647a92e7571c05b2e18729e78c2c89f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_6c47a2d6b40d7d4c5c80127a2c5d2ef76f50e239f9d21bfedebb066ea19bc417 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c47a2d6b40d7d4c5c80127a2c5d2ef76f50e239f9d21bfedebb066ea19bc417->enter($__internal_6c47a2d6b40d7d4c5c80127a2c5d2ef76f50e239f9d21bfedebb066ea19bc417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_563dbf2f88aac5f8d1a65067baeed5d647a92e7571c05b2e18729e78c2c89f7d->leave($__internal_563dbf2f88aac5f8d1a65067baeed5d647a92e7571c05b2e18729e78c2c89f7d_prof);

        
        $__internal_6c47a2d6b40d7d4c5c80127a2c5d2ef76f50e239f9d21bfedebb066ea19bc417->leave($__internal_6c47a2d6b40d7d4c5c80127a2c5d2ef76f50e239f9d21bfedebb066ea19bc417_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7f0d66d16145aefdf7264a7492a27d12ad08e5203f9006c3a9954281b19b3428 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f0d66d16145aefdf7264a7492a27d12ad08e5203f9006c3a9954281b19b3428->enter($__internal_7f0d66d16145aefdf7264a7492a27d12ad08e5203f9006c3a9954281b19b3428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_61f194227bc670a57644cf345b7d674272e11143364544b896b5c30a092111ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61f194227bc670a57644cf345b7d674272e11143364544b896b5c30a092111ac->enter($__internal_61f194227bc670a57644cf345b7d674272e11143364544b896b5c30a092111ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_61f194227bc670a57644cf345b7d674272e11143364544b896b5c30a092111ac->leave($__internal_61f194227bc670a57644cf345b7d674272e11143364544b896b5c30a092111ac_prof);

        
        $__internal_7f0d66d16145aefdf7264a7492a27d12ad08e5203f9006c3a9954281b19b3428->leave($__internal_7f0d66d16145aefdf7264a7492a27d12ad08e5203f9006c3a9954281b19b3428_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
", "FOSUserBundle:Security:login.html.twig", "/home/nicolaescu/Workspace/Car-Rental/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
