<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_f2cc935a87882ea4a7afa91e49ea5ead3a1ee577920961789ae61bfedda7b7c6 extends Twig_Template
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
        $__internal_d682096c0f71c97be0a44ce7cc7dbbc4a5a233d26218972573a4aeb7de9cf32a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d682096c0f71c97be0a44ce7cc7dbbc4a5a233d26218972573a4aeb7de9cf32a->enter($__internal_d682096c0f71c97be0a44ce7cc7dbbc4a5a233d26218972573a4aeb7de9cf32a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_f25a20b14ab6631cb540876b368c3e54192eba35089e81fc6c4694c30041ce89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f25a20b14ab6631cb540876b368c3e54192eba35089e81fc6c4694c30041ce89->enter($__internal_f25a20b14ab6631cb540876b368c3e54192eba35089e81fc6c4694c30041ce89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_d682096c0f71c97be0a44ce7cc7dbbc4a5a233d26218972573a4aeb7de9cf32a->leave($__internal_d682096c0f71c97be0a44ce7cc7dbbc4a5a233d26218972573a4aeb7de9cf32a_prof);

        
        $__internal_f25a20b14ab6631cb540876b368c3e54192eba35089e81fc6c4694c30041ce89->leave($__internal_f25a20b14ab6631cb540876b368c3e54192eba35089e81fc6c4694c30041ce89_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "/home/nicolaescu/Workspace/Car-Rental/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
