<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_2d9ba891f60f9a1f664c18b99b721f7f617b6f45aa9db6af0b5528cbaecf2793 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_b4ad74ffca5cc57bcaa87f3718dc1d1c13a69d62a8b225656f85517a6ffc2aa6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4ad74ffca5cc57bcaa87f3718dc1d1c13a69d62a8b225656f85517a6ffc2aa6->enter($__internal_b4ad74ffca5cc57bcaa87f3718dc1d1c13a69d62a8b225656f85517a6ffc2aa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_ce7aaa66d40f5e343a5daf76a4de6543d76dc786e778816f15002959c2f1862c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce7aaa66d40f5e343a5daf76a4de6543d76dc786e778816f15002959c2f1862c->enter($__internal_ce7aaa66d40f5e343a5daf76a4de6543d76dc786e778816f15002959c2f1862c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4ad74ffca5cc57bcaa87f3718dc1d1c13a69d62a8b225656f85517a6ffc2aa6->leave($__internal_b4ad74ffca5cc57bcaa87f3718dc1d1c13a69d62a8b225656f85517a6ffc2aa6_prof);

        
        $__internal_ce7aaa66d40f5e343a5daf76a4de6543d76dc786e778816f15002959c2f1862c->leave($__internal_ce7aaa66d40f5e343a5daf76a4de6543d76dc786e778816f15002959c2f1862c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6e9d546ec25108d880034032f33d1b2814d352da9ceed2f6e1b76e848b1606ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e9d546ec25108d880034032f33d1b2814d352da9ceed2f6e1b76e848b1606ae->enter($__internal_6e9d546ec25108d880034032f33d1b2814d352da9ceed2f6e1b76e848b1606ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_43fd62bcc5c10f99b6c2acd7e68b73d65de6820ab7dd3c954093d5500d578ba9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43fd62bcc5c10f99b6c2acd7e68b73d65de6820ab7dd3c954093d5500d578ba9->enter($__internal_43fd62bcc5c10f99b6c2acd7e68b73d65de6820ab7dd3c954093d5500d578ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_43fd62bcc5c10f99b6c2acd7e68b73d65de6820ab7dd3c954093d5500d578ba9->leave($__internal_43fd62bcc5c10f99b6c2acd7e68b73d65de6820ab7dd3c954093d5500d578ba9_prof);

        
        $__internal_6e9d546ec25108d880034032f33d1b2814d352da9ceed2f6e1b76e848b1606ae->leave($__internal_6e9d546ec25108d880034032f33d1b2814d352da9ceed2f6e1b76e848b1606ae_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/home/nicolaescu/Workspace/Car-Rental/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
