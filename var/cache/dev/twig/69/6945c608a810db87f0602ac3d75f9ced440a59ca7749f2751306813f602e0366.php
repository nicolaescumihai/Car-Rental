<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_03913a4040b1af5032198a4743a140589580d3c481ac643aeca19c94df3853b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_f9d84d96515d423755cd3951b2d0f6867cdeb374b2d6b5e07f4cdd12f58f19c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9d84d96515d423755cd3951b2d0f6867cdeb374b2d6b5e07f4cdd12f58f19c6->enter($__internal_f9d84d96515d423755cd3951b2d0f6867cdeb374b2d6b5e07f4cdd12f58f19c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_c11bc5c5a2099548532af861cb00fd9b2f6372913a629fac882e419c7673dbbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c11bc5c5a2099548532af861cb00fd9b2f6372913a629fac882e419c7673dbbd->enter($__internal_c11bc5c5a2099548532af861cb00fd9b2f6372913a629fac882e419c7673dbbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9d84d96515d423755cd3951b2d0f6867cdeb374b2d6b5e07f4cdd12f58f19c6->leave($__internal_f9d84d96515d423755cd3951b2d0f6867cdeb374b2d6b5e07f4cdd12f58f19c6_prof);

        
        $__internal_c11bc5c5a2099548532af861cb00fd9b2f6372913a629fac882e419c7673dbbd->leave($__internal_c11bc5c5a2099548532af861cb00fd9b2f6372913a629fac882e419c7673dbbd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2f514297ff9a98701c39d77691958fa94a4bda36c8c128321dddbe3d99baed45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f514297ff9a98701c39d77691958fa94a4bda36c8c128321dddbe3d99baed45->enter($__internal_2f514297ff9a98701c39d77691958fa94a4bda36c8c128321dddbe3d99baed45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ba2332037f55d3d34827a5f56ab1490f3081cb5b0cff3b03a9e5cdf6ed46534b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba2332037f55d3d34827a5f56ab1490f3081cb5b0cff3b03a9e5cdf6ed46534b->enter($__internal_ba2332037f55d3d34827a5f56ab1490f3081cb5b0cff3b03a9e5cdf6ed46534b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_ba2332037f55d3d34827a5f56ab1490f3081cb5b0cff3b03a9e5cdf6ed46534b->leave($__internal_ba2332037f55d3d34827a5f56ab1490f3081cb5b0cff3b03a9e5cdf6ed46534b_prof);

        
        $__internal_2f514297ff9a98701c39d77691958fa94a4bda36c8c128321dddbe3d99baed45->leave($__internal_2f514297ff9a98701c39d77691958fa94a4bda36c8c128321dddbe3d99baed45_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/home/nicolaescu/Workspace/Car-Rental/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
