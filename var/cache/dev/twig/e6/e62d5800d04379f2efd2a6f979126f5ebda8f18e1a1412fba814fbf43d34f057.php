<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_d2573d8f7a0cfdb906ba630e49400a4ab430423e28c8d3acf4c23d46c5e51f52 extends Twig_Template
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
        $__internal_46af46ec13f802a7dc8e5e7af50bc200d4b5def547c89a72373e5b13c7f33855 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46af46ec13f802a7dc8e5e7af50bc200d4b5def547c89a72373e5b13c7f33855->enter($__internal_46af46ec13f802a7dc8e5e7af50bc200d4b5def547c89a72373e5b13c7f33855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_aabb8fd60f35be78af8cce11399e88d277a422ebe08bf421dfec1c0aa1347c87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aabb8fd60f35be78af8cce11399e88d277a422ebe08bf421dfec1c0aa1347c87->enter($__internal_aabb8fd60f35be78af8cce11399e88d277a422ebe08bf421dfec1c0aa1347c87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_46af46ec13f802a7dc8e5e7af50bc200d4b5def547c89a72373e5b13c7f33855->leave($__internal_46af46ec13f802a7dc8e5e7af50bc200d4b5def547c89a72373e5b13c7f33855_prof);

        
        $__internal_aabb8fd60f35be78af8cce11399e88d277a422ebe08bf421dfec1c0aa1347c87->leave($__internal_aabb8fd60f35be78af8cce11399e88d277a422ebe08bf421dfec1c0aa1347c87_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/home/nicolaescu/Workspace/Car-Rental/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
