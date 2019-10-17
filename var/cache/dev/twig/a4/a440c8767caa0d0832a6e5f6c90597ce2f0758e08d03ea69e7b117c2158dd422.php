<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_b332dd93fdf6bb3906a4563165aba4423fa0e69d95097259f8016a3367bbd404 extends Twig_Template
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
        $__internal_386b31abcaa0cc5612677a3cfed4a455a4a877a026042375b72d56e5d6067898 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_386b31abcaa0cc5612677a3cfed4a455a4a877a026042375b72d56e5d6067898->enter($__internal_386b31abcaa0cc5612677a3cfed4a455a4a877a026042375b72d56e5d6067898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_a67e9066d080237caa96b451f7c8f837ebf7753dc1f954227ec9499a620df7fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a67e9066d080237caa96b451f7c8f837ebf7753dc1f954227ec9499a620df7fa->enter($__internal_a67e9066d080237caa96b451f7c8f837ebf7753dc1f954227ec9499a620df7fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_386b31abcaa0cc5612677a3cfed4a455a4a877a026042375b72d56e5d6067898->leave($__internal_386b31abcaa0cc5612677a3cfed4a455a4a877a026042375b72d56e5d6067898_prof);

        
        $__internal_a67e9066d080237caa96b451f7c8f837ebf7753dc1f954227ec9499a620df7fa->leave($__internal_a67e9066d080237caa96b451f7c8f837ebf7753dc1f954227ec9499a620df7fa_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/home/nicolaescu/Workspace/Car-Rental/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
