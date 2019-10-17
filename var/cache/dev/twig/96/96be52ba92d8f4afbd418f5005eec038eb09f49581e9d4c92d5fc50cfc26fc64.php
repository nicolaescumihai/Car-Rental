<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_93d638c45f92c8982aa88870c1dc39cb6810e5c862baf25f5479e6b1b8dea1d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_821355f21106111ff46aa87467d7113046eed6e74e616d245a0f90f95a5ff4a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_821355f21106111ff46aa87467d7113046eed6e74e616d245a0f90f95a5ff4a0->enter($__internal_821355f21106111ff46aa87467d7113046eed6e74e616d245a0f90f95a5ff4a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_e74955931a3921a03806c8d46178137c8625a84d433b3cbeefc6b2f71a46c6b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e74955931a3921a03806c8d46178137c8625a84d433b3cbeefc6b2f71a46c6b6->enter($__internal_e74955931a3921a03806c8d46178137c8625a84d433b3cbeefc6b2f71a46c6b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_821355f21106111ff46aa87467d7113046eed6e74e616d245a0f90f95a5ff4a0->leave($__internal_821355f21106111ff46aa87467d7113046eed6e74e616d245a0f90f95a5ff4a0_prof);

        
        $__internal_e74955931a3921a03806c8d46178137c8625a84d433b3cbeefc6b2f71a46c6b6->leave($__internal_e74955931a3921a03806c8d46178137c8625a84d433b3cbeefc6b2f71a46c6b6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_192ee277ffd343d6a44feabfc3a82d216a10f0a046eacb9a8807202872bcbd7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_192ee277ffd343d6a44feabfc3a82d216a10f0a046eacb9a8807202872bcbd7f->enter($__internal_192ee277ffd343d6a44feabfc3a82d216a10f0a046eacb9a8807202872bcbd7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ec341cc60e26276f06f6225536526f519780fc1514ad153a401a34764650ce33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec341cc60e26276f06f6225536526f519780fc1514ad153a401a34764650ce33->enter($__internal_ec341cc60e26276f06f6225536526f519780fc1514ad153a401a34764650ce33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_ec341cc60e26276f06f6225536526f519780fc1514ad153a401a34764650ce33->leave($__internal_ec341cc60e26276f06f6225536526f519780fc1514ad153a401a34764650ce33_prof);

        
        $__internal_192ee277ffd343d6a44feabfc3a82d216a10f0a046eacb9a8807202872bcbd7f->leave($__internal_192ee277ffd343d6a44feabfc3a82d216a10f0a046eacb9a8807202872bcbd7f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/home/nicolaescu/Workspace/Car-Rental/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
