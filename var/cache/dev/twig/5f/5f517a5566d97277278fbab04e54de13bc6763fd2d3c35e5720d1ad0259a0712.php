<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_1438b64cf2d936018c0eecc080cce01049a2c178df7eaa99571e44a3c2d7c263 extends Twig_Template
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
        $__internal_9cdfec3549bc555ac87b1bfc7e8324823748804f8c0ec86e0ed4bfe5b5875cf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cdfec3549bc555ac87b1bfc7e8324823748804f8c0ec86e0ed4bfe5b5875cf5->enter($__internal_9cdfec3549bc555ac87b1bfc7e8324823748804f8c0ec86e0ed4bfe5b5875cf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_2beb167ae37b44a5d3c7f8baf128fe47df9c6131c858fca399e4c7b93b6d0189 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2beb167ae37b44a5d3c7f8baf128fe47df9c6131c858fca399e4c7b93b6d0189->enter($__internal_2beb167ae37b44a5d3c7f8baf128fe47df9c6131c858fca399e4c7b93b6d0189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_9cdfec3549bc555ac87b1bfc7e8324823748804f8c0ec86e0ed4bfe5b5875cf5->leave($__internal_9cdfec3549bc555ac87b1bfc7e8324823748804f8c0ec86e0ed4bfe5b5875cf5_prof);

        
        $__internal_2beb167ae37b44a5d3c7f8baf128fe47df9c6131c858fca399e4c7b93b6d0189->leave($__internal_2beb167ae37b44a5d3c7f8baf128fe47df9c6131c858fca399e4c7b93b6d0189_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "/home/nicolaescu/Workspace/Car-Rental/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
