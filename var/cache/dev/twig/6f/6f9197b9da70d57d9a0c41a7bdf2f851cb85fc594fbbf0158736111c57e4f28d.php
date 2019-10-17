<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_c1112a3e76230e4f763474e99a4b62333abdba7570d520c31d7bf2c165015753 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_aa03a761a25c66caca8830dd8250f7cdec7881d213b089cb4d1d3f9490236f0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa03a761a25c66caca8830dd8250f7cdec7881d213b089cb4d1d3f9490236f0c->enter($__internal_aa03a761a25c66caca8830dd8250f7cdec7881d213b089cb4d1d3f9490236f0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_559f35b6c0d19597f13625a1fd0543521067a371a7925218be05d78d8283a9b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_559f35b6c0d19597f13625a1fd0543521067a371a7925218be05d78d8283a9b6->enter($__internal_559f35b6c0d19597f13625a1fd0543521067a371a7925218be05d78d8283a9b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa03a761a25c66caca8830dd8250f7cdec7881d213b089cb4d1d3f9490236f0c->leave($__internal_aa03a761a25c66caca8830dd8250f7cdec7881d213b089cb4d1d3f9490236f0c_prof);

        
        $__internal_559f35b6c0d19597f13625a1fd0543521067a371a7925218be05d78d8283a9b6->leave($__internal_559f35b6c0d19597f13625a1fd0543521067a371a7925218be05d78d8283a9b6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3bd2fa53f851580f14b3581c3938225c6f0ebdedb1d0541c4d19f101c93d88e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bd2fa53f851580f14b3581c3938225c6f0ebdedb1d0541c4d19f101c93d88e3->enter($__internal_3bd2fa53f851580f14b3581c3938225c6f0ebdedb1d0541c4d19f101c93d88e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a17d5c526b17c625ccaf87e1bf9ae6963527ca883709587761b9969bff0879ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a17d5c526b17c625ccaf87e1bf9ae6963527ca883709587761b9969bff0879ab->enter($__internal_a17d5c526b17c625ccaf87e1bf9ae6963527ca883709587761b9969bff0879ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_a17d5c526b17c625ccaf87e1bf9ae6963527ca883709587761b9969bff0879ab->leave($__internal_a17d5c526b17c625ccaf87e1bf9ae6963527ca883709587761b9969bff0879ab_prof);

        
        $__internal_3bd2fa53f851580f14b3581c3938225c6f0ebdedb1d0541c4d19f101c93d88e3->leave($__internal_3bd2fa53f851580f14b3581c3938225c6f0ebdedb1d0541c4d19f101c93d88e3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/home/nicolaescu/Workspace/Car-Rental/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
