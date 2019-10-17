<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_9928096e3ba9c367d5427f2d228a9e62eda4b06a7d00cdbb311543ef04daba37 extends Twig_Template
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
        $__internal_a14f20c0e781741aa1c5bee27a4d76a85fc31872b718ecd2141f6adc0e74636a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a14f20c0e781741aa1c5bee27a4d76a85fc31872b718ecd2141f6adc0e74636a->enter($__internal_a14f20c0e781741aa1c5bee27a4d76a85fc31872b718ecd2141f6adc0e74636a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_24b21e13e78a56f0e4a55d20eef0ae3afe166132fa74a298edffd1ddb7aabe75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24b21e13e78a56f0e4a55d20eef0ae3afe166132fa74a298edffd1ddb7aabe75->enter($__internal_24b21e13e78a56f0e4a55d20eef0ae3afe166132fa74a298edffd1ddb7aabe75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_a14f20c0e781741aa1c5bee27a4d76a85fc31872b718ecd2141f6adc0e74636a->leave($__internal_a14f20c0e781741aa1c5bee27a4d76a85fc31872b718ecd2141f6adc0e74636a_prof);

        
        $__internal_24b21e13e78a56f0e4a55d20eef0ae3afe166132fa74a298edffd1ddb7aabe75->leave($__internal_24b21e13e78a56f0e4a55d20eef0ae3afe166132fa74a298edffd1ddb7aabe75_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/home/nicolaescu/Workspace/Car-Rental/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
