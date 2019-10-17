<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_63fe1af39a780343effbaa49d60c868ccda5678a199eaa179f2c1177920aa604 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_5e04ad168de8e0e974601ecf5baed08bcff667001b935acac7aaae5c78bca967 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e04ad168de8e0e974601ecf5baed08bcff667001b935acac7aaae5c78bca967->enter($__internal_5e04ad168de8e0e974601ecf5baed08bcff667001b935acac7aaae5c78bca967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_4e4ca37511fd9b714915220c84d4db5a4404a14c1a36afc9dda4d4dcc450eec6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e4ca37511fd9b714915220c84d4db5a4404a14c1a36afc9dda4d4dcc450eec6->enter($__internal_4e4ca37511fd9b714915220c84d4db5a4404a14c1a36afc9dda4d4dcc450eec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e04ad168de8e0e974601ecf5baed08bcff667001b935acac7aaae5c78bca967->leave($__internal_5e04ad168de8e0e974601ecf5baed08bcff667001b935acac7aaae5c78bca967_prof);

        
        $__internal_4e4ca37511fd9b714915220c84d4db5a4404a14c1a36afc9dda4d4dcc450eec6->leave($__internal_4e4ca37511fd9b714915220c84d4db5a4404a14c1a36afc9dda4d4dcc450eec6_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b1c948d7d8fdc59591a0364be225d9f928dc041d717ee0a5c83374e8b32759aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1c948d7d8fdc59591a0364be225d9f928dc041d717ee0a5c83374e8b32759aa->enter($__internal_b1c948d7d8fdc59591a0364be225d9f928dc041d717ee0a5c83374e8b32759aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_606a09c035520cee46f5694eae456d5bc0a7524bb7dc132edbe898a642bcc0c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_606a09c035520cee46f5694eae456d5bc0a7524bb7dc132edbe898a642bcc0c5->enter($__internal_606a09c035520cee46f5694eae456d5bc0a7524bb7dc132edbe898a642bcc0c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_606a09c035520cee46f5694eae456d5bc0a7524bb7dc132edbe898a642bcc0c5->leave($__internal_606a09c035520cee46f5694eae456d5bc0a7524bb7dc132edbe898a642bcc0c5_prof);

        
        $__internal_b1c948d7d8fdc59591a0364be225d9f928dc041d717ee0a5c83374e8b32759aa->leave($__internal_b1c948d7d8fdc59591a0364be225d9f928dc041d717ee0a5c83374e8b32759aa_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/home/nicolaescu/Workspace/Car-Rental/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
