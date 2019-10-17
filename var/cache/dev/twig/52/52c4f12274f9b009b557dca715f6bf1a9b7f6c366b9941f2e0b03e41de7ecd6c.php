<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_ee1dfc7d281c262d3b02eca799ef868692971d4f4e09f8ed09b6308736f30b45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_b9feb2c908df7a97b1f8107d1867d635f7afa2c312655d7aea4be8db1a228b1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9feb2c908df7a97b1f8107d1867d635f7afa2c312655d7aea4be8db1a228b1d->enter($__internal_b9feb2c908df7a97b1f8107d1867d635f7afa2c312655d7aea4be8db1a228b1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_0cc6bfecea172d958b76061a8d2d4f1e8d1d168780e3dbc5e9d996ddddd73fb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cc6bfecea172d958b76061a8d2d4f1e8d1d168780e3dbc5e9d996ddddd73fb9->enter($__internal_0cc6bfecea172d958b76061a8d2d4f1e8d1d168780e3dbc5e9d996ddddd73fb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9feb2c908df7a97b1f8107d1867d635f7afa2c312655d7aea4be8db1a228b1d->leave($__internal_b9feb2c908df7a97b1f8107d1867d635f7afa2c312655d7aea4be8db1a228b1d_prof);

        
        $__internal_0cc6bfecea172d958b76061a8d2d4f1e8d1d168780e3dbc5e9d996ddddd73fb9->leave($__internal_0cc6bfecea172d958b76061a8d2d4f1e8d1d168780e3dbc5e9d996ddddd73fb9_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a49a48d2a658399efa229ee6181a5e0580d71700e001999d4c779223914d945c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a49a48d2a658399efa229ee6181a5e0580d71700e001999d4c779223914d945c->enter($__internal_a49a48d2a658399efa229ee6181a5e0580d71700e001999d4c779223914d945c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2fa3f5645daa23b397177e6b9a69288031550227d171db019be52e7a0885ccea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fa3f5645daa23b397177e6b9a69288031550227d171db019be52e7a0885ccea->enter($__internal_2fa3f5645daa23b397177e6b9a69288031550227d171db019be52e7a0885ccea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_2fa3f5645daa23b397177e6b9a69288031550227d171db019be52e7a0885ccea->leave($__internal_2fa3f5645daa23b397177e6b9a69288031550227d171db019be52e7a0885ccea_prof);

        
        $__internal_a49a48d2a658399efa229ee6181a5e0580d71700e001999d4c779223914d945c->leave($__internal_a49a48d2a658399efa229ee6181a5e0580d71700e001999d4c779223914d945c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/home/nicolaescu/Workspace/Car-Rental/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
