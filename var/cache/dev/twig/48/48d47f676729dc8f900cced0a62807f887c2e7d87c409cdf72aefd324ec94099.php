<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_17af0b842f5f260ce4b311b78a6b85554775ac3d7417afe6ca9c415ab9f36a74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_48b3027ed01bb9d080ad80812a7bc209c4730713c25a6e276c535f2e37b1e0b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48b3027ed01bb9d080ad80812a7bc209c4730713c25a6e276c535f2e37b1e0b6->enter($__internal_48b3027ed01bb9d080ad80812a7bc209c4730713c25a6e276c535f2e37b1e0b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_90e4ef97d2f44c8d459d37a6087683588c9e30290bfab30b9c50b4be1df2ca27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90e4ef97d2f44c8d459d37a6087683588c9e30290bfab30b9c50b4be1df2ca27->enter($__internal_90e4ef97d2f44c8d459d37a6087683588c9e30290bfab30b9c50b4be1df2ca27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48b3027ed01bb9d080ad80812a7bc209c4730713c25a6e276c535f2e37b1e0b6->leave($__internal_48b3027ed01bb9d080ad80812a7bc209c4730713c25a6e276c535f2e37b1e0b6_prof);

        
        $__internal_90e4ef97d2f44c8d459d37a6087683588c9e30290bfab30b9c50b4be1df2ca27->leave($__internal_90e4ef97d2f44c8d459d37a6087683588c9e30290bfab30b9c50b4be1df2ca27_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_debe30dc07d66dd014486cb927e337d39e3d053ba1b66928018dcadd6050741e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_debe30dc07d66dd014486cb927e337d39e3d053ba1b66928018dcadd6050741e->enter($__internal_debe30dc07d66dd014486cb927e337d39e3d053ba1b66928018dcadd6050741e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a248584b4781131ea67be618155699d947212154275e416b67d1e5121dab8b6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a248584b4781131ea67be618155699d947212154275e416b67d1e5121dab8b6f->enter($__internal_a248584b4781131ea67be618155699d947212154275e416b67d1e5121dab8b6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_a248584b4781131ea67be618155699d947212154275e416b67d1e5121dab8b6f->leave($__internal_a248584b4781131ea67be618155699d947212154275e416b67d1e5121dab8b6f_prof);

        
        $__internal_debe30dc07d66dd014486cb927e337d39e3d053ba1b66928018dcadd6050741e->leave($__internal_debe30dc07d66dd014486cb927e337d39e3d053ba1b66928018dcadd6050741e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/home/nicolaescu/Workspace/Car-Rental/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
