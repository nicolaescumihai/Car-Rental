<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_d86edbff7efa2aa7a657181f512a9af2786c990d04714fc94a251e02b3d38fef extends Twig_Template
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
        $__internal_027baeca28e830e88781460e63df823ce5ac9a9584eeddfe8af04fc5bdf63359 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_027baeca28e830e88781460e63df823ce5ac9a9584eeddfe8af04fc5bdf63359->enter($__internal_027baeca28e830e88781460e63df823ce5ac9a9584eeddfe8af04fc5bdf63359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_7afd92400e34aebb55b21bfa053b746628c33a4a7601e07b0a00f8f8ccbcbb6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7afd92400e34aebb55b21bfa053b746628c33a4a7601e07b0a00f8f8ccbcbb6a->enter($__internal_7afd92400e34aebb55b21bfa053b746628c33a4a7601e07b0a00f8f8ccbcbb6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_027baeca28e830e88781460e63df823ce5ac9a9584eeddfe8af04fc5bdf63359->leave($__internal_027baeca28e830e88781460e63df823ce5ac9a9584eeddfe8af04fc5bdf63359_prof);

        
        $__internal_7afd92400e34aebb55b21bfa053b746628c33a4a7601e07b0a00f8f8ccbcbb6a->leave($__internal_7afd92400e34aebb55b21bfa053b746628c33a4a7601e07b0a00f8f8ccbcbb6a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/home/nicolaescu/Workspace/Car-Rental/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
