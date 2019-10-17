<?php

/* @App/test.html.twig */
class __TwigTemplate_f3c589ccaffd7686e9c956d960f32b38df709b1cc533685b41e6448951435cc7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b26a0b140e0b36fe8bb68811354dc0d991e0ed887295e5f7e664ac95d7fe3223 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b26a0b140e0b36fe8bb68811354dc0d991e0ed887295e5f7e664ac95d7fe3223->enter($__internal_b26a0b140e0b36fe8bb68811354dc0d991e0ed887295e5f7e664ac95d7fe3223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/test.html.twig"));

        $__internal_387d32585461ee9602574c429c7620831cc5e0366b5812158eaff9002f86fbc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_387d32585461ee9602574c429c7620831cc5e0366b5812158eaff9002f86fbc8->enter($__internal_387d32585461ee9602574c429c7620831cc5e0366b5812158eaff9002f86fbc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/test.html.twig"));

        // line 1
        $this->loadTemplate("base.html.twig", "@App/test.html.twig", 1)->display($context);
        // line 2
        echo "
";
        
        $__internal_b26a0b140e0b36fe8bb68811354dc0d991e0ed887295e5f7e664ac95d7fe3223->leave($__internal_b26a0b140e0b36fe8bb68811354dc0d991e0ed887295e5f7e664ac95d7fe3223_prof);

        
        $__internal_387d32585461ee9602574c429c7620831cc5e0366b5812158eaff9002f86fbc8->leave($__internal_387d32585461ee9602574c429c7620831cc5e0366b5812158eaff9002f86fbc8_prof);

    }

    public function getTemplateName()
    {
        return "@App/test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include \"base.html.twig\" %}

", "@App/test.html.twig", "/home/nicolaescu/Workspace/CarRental/src/AppBundle/Resources/views/test.html.twig");
    }
}
