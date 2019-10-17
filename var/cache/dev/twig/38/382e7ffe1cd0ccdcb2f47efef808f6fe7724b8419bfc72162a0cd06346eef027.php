<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_78b6319c3168f50cd0c9fd1c87249359634a33065a7322c4df9f89ccbef531bb extends Twig_Template
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
        $__internal_1573c6a04a8ffe1d5764570469def72660ea6ea2bcbf1a35ee7cc8ca716cd6f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1573c6a04a8ffe1d5764570469def72660ea6ea2bcbf1a35ee7cc8ca716cd6f7->enter($__internal_1573c6a04a8ffe1d5764570469def72660ea6ea2bcbf1a35ee7cc8ca716cd6f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_aff84cec9e079d34a3d57129fef30c2d89c26c0a34c7d2bd665b72970118b388 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aff84cec9e079d34a3d57129fef30c2d89c26c0a34c7d2bd665b72970118b388->enter($__internal_aff84cec9e079d34a3d57129fef30c2d89c26c0a34c7d2bd665b72970118b388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_1573c6a04a8ffe1d5764570469def72660ea6ea2bcbf1a35ee7cc8ca716cd6f7->leave($__internal_1573c6a04a8ffe1d5764570469def72660ea6ea2bcbf1a35ee7cc8ca716cd6f7_prof);

        
        $__internal_aff84cec9e079d34a3d57129fef30c2d89c26c0a34c7d2bd665b72970118b388->leave($__internal_aff84cec9e079d34a3d57129fef30c2d89c26c0a34c7d2bd665b72970118b388_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/home/nicolaescu/Workspace/Car-Rental/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
