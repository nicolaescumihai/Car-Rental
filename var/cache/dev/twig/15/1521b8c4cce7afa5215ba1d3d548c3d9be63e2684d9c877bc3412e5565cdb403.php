<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_6e047de19c2b0139c1ef2a5d8d91e3ee17de97302572470477eb95e1d5f28e22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_55280db9703c409d6754bfa4c445bb03be906a2a6592102227676de85c3c0b28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55280db9703c409d6754bfa4c445bb03be906a2a6592102227676de85c3c0b28->enter($__internal_55280db9703c409d6754bfa4c445bb03be906a2a6592102227676de85c3c0b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_14245e57ba71717dd21cf3fc5233d1ab2e820f70e61dc4df8a8a3156febfc7ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14245e57ba71717dd21cf3fc5233d1ab2e820f70e61dc4df8a8a3156febfc7ae->enter($__internal_14245e57ba71717dd21cf3fc5233d1ab2e820f70e61dc4df8a8a3156febfc7ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55280db9703c409d6754bfa4c445bb03be906a2a6592102227676de85c3c0b28->leave($__internal_55280db9703c409d6754bfa4c445bb03be906a2a6592102227676de85c3c0b28_prof);

        
        $__internal_14245e57ba71717dd21cf3fc5233d1ab2e820f70e61dc4df8a8a3156febfc7ae->leave($__internal_14245e57ba71717dd21cf3fc5233d1ab2e820f70e61dc4df8a8a3156febfc7ae_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f9ef1c0fe30af7179271379b1ddd4cb2b69ff58b6deefc988cf45f44d241bb00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9ef1c0fe30af7179271379b1ddd4cb2b69ff58b6deefc988cf45f44d241bb00->enter($__internal_f9ef1c0fe30af7179271379b1ddd4cb2b69ff58b6deefc988cf45f44d241bb00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_59f2781edc06e71e6184f5b2cda2b29dd8d56cf8567e84d8e5af4350b55276c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59f2781edc06e71e6184f5b2cda2b29dd8d56cf8567e84d8e5af4350b55276c3->enter($__internal_59f2781edc06e71e6184f5b2cda2b29dd8d56cf8567e84d8e5af4350b55276c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_59f2781edc06e71e6184f5b2cda2b29dd8d56cf8567e84d8e5af4350b55276c3->leave($__internal_59f2781edc06e71e6184f5b2cda2b29dd8d56cf8567e84d8e5af4350b55276c3_prof);

        
        $__internal_f9ef1c0fe30af7179271379b1ddd4cb2b69ff58b6deefc988cf45f44d241bb00->leave($__internal_f9ef1c0fe30af7179271379b1ddd4cb2b69ff58b6deefc988cf45f44d241bb00_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/home/nicolaescu/Workspace/Car-Rental/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
