<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_543242b188429d0f13759256d86393637f6c1739675faae6bcd8e01c0ffd48cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4240b2302f6e1673ba894690267ea768da8be99f96e6de1d9ed025e6cc48a31b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4240b2302f6e1673ba894690267ea768da8be99f96e6de1d9ed025e6cc48a31b->enter($__internal_4240b2302f6e1673ba894690267ea768da8be99f96e6de1d9ed025e6cc48a31b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_ddbe8012c6ce0a99914106b46437fd7e68e0a8246b55d952ae3dbff0940e9b9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddbe8012c6ce0a99914106b46437fd7e68e0a8246b55d952ae3dbff0940e9b9d->enter($__internal_ddbe8012c6ce0a99914106b46437fd7e68e0a8246b55d952ae3dbff0940e9b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_4240b2302f6e1673ba894690267ea768da8be99f96e6de1d9ed025e6cc48a31b->leave($__internal_4240b2302f6e1673ba894690267ea768da8be99f96e6de1d9ed025e6cc48a31b_prof);

        
        $__internal_ddbe8012c6ce0a99914106b46437fd7e68e0a8246b55d952ae3dbff0940e9b9d->leave($__internal_ddbe8012c6ce0a99914106b46437fd7e68e0a8246b55d952ae3dbff0940e9b9d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_e560811e77b369c62230b5960d2d3e5a248bf6a4e1604953c7ecf18ab750537f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e560811e77b369c62230b5960d2d3e5a248bf6a4e1604953c7ecf18ab750537f->enter($__internal_e560811e77b369c62230b5960d2d3e5a248bf6a4e1604953c7ecf18ab750537f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_910a3ec67f9a5071d5b2a771347693be6b8652e87dc2d2a1a3d92ba8ecb32fd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_910a3ec67f9a5071d5b2a771347693be6b8652e87dc2d2a1a3d92ba8ecb32fd2->enter($__internal_910a3ec67f9a5071d5b2a771347693be6b8652e87dc2d2a1a3d92ba8ecb32fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_910a3ec67f9a5071d5b2a771347693be6b8652e87dc2d2a1a3d92ba8ecb32fd2->leave($__internal_910a3ec67f9a5071d5b2a771347693be6b8652e87dc2d2a1a3d92ba8ecb32fd2_prof);

        
        $__internal_e560811e77b369c62230b5960d2d3e5a248bf6a4e1604953c7ecf18ab750537f->leave($__internal_e560811e77b369c62230b5960d2d3e5a248bf6a4e1604953c7ecf18ab750537f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/nicolaescu/Workspace/Car-Rental/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
