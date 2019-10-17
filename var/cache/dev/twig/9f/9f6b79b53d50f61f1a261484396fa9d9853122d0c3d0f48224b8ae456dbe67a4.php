<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_9c00cc92e36867358771fcd8adacbb4f55ff827af48ad0a3a5eb24e32249ed28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_83903f0de2b2b7f212e0bc4d5b4a629958c422c82fcfc2f55e5fdfad4fdb44d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83903f0de2b2b7f212e0bc4d5b4a629958c422c82fcfc2f55e5fdfad4fdb44d6->enter($__internal_83903f0de2b2b7f212e0bc4d5b4a629958c422c82fcfc2f55e5fdfad4fdb44d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_5b4b6095ae23edf96b492c0d0717163383f73f228d5fab01c08c6ef90a33325a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b4b6095ae23edf96b492c0d0717163383f73f228d5fab01c08c6ef90a33325a->enter($__internal_5b4b6095ae23edf96b492c0d0717163383f73f228d5fab01c08c6ef90a33325a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83903f0de2b2b7f212e0bc4d5b4a629958c422c82fcfc2f55e5fdfad4fdb44d6->leave($__internal_83903f0de2b2b7f212e0bc4d5b4a629958c422c82fcfc2f55e5fdfad4fdb44d6_prof);

        
        $__internal_5b4b6095ae23edf96b492c0d0717163383f73f228d5fab01c08c6ef90a33325a->leave($__internal_5b4b6095ae23edf96b492c0d0717163383f73f228d5fab01c08c6ef90a33325a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5674d0dcba2736a2124b8ba2b8839e9d84dc1bc06d92f0e6c61a60b0df327f56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5674d0dcba2736a2124b8ba2b8839e9d84dc1bc06d92f0e6c61a60b0df327f56->enter($__internal_5674d0dcba2736a2124b8ba2b8839e9d84dc1bc06d92f0e6c61a60b0df327f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_584d5b3654dad974ad30a7c931ff741386578c0973e2d1336ffb01f21c64e432 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_584d5b3654dad974ad30a7c931ff741386578c0973e2d1336ffb01f21c64e432->enter($__internal_584d5b3654dad974ad30a7c931ff741386578c0973e2d1336ffb01f21c64e432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_584d5b3654dad974ad30a7c931ff741386578c0973e2d1336ffb01f21c64e432->leave($__internal_584d5b3654dad974ad30a7c931ff741386578c0973e2d1336ffb01f21c64e432_prof);

        
        $__internal_5674d0dcba2736a2124b8ba2b8839e9d84dc1bc06d92f0e6c61a60b0df327f56->leave($__internal_5674d0dcba2736a2124b8ba2b8839e9d84dc1bc06d92f0e6c61a60b0df327f56_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/home/nicolaescu/Workspace/Car-Rental/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
