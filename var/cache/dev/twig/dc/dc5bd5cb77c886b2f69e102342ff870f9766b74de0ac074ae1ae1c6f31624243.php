<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_197555324fe40ec8c205d744a939bf8dff89c8f6ed8128edf5b110bdf9ff867c extends Twig_Template
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
        $__internal_db16a9c1824d693d31c14b32b1ec3bdf0768d436ca0345533d5bde5a17b58ccf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db16a9c1824d693d31c14b32b1ec3bdf0768d436ca0345533d5bde5a17b58ccf->enter($__internal_db16a9c1824d693d31c14b32b1ec3bdf0768d436ca0345533d5bde5a17b58ccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_6c9c85c8f1ce3295dd42df8ba20b7097ed51e17e2f85d6ce1df42bc9628dd0f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c9c85c8f1ce3295dd42df8ba20b7097ed51e17e2f85d6ce1df42bc9628dd0f4->enter($__internal_6c9c85c8f1ce3295dd42df8ba20b7097ed51e17e2f85d6ce1df42bc9628dd0f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_db16a9c1824d693d31c14b32b1ec3bdf0768d436ca0345533d5bde5a17b58ccf->leave($__internal_db16a9c1824d693d31c14b32b1ec3bdf0768d436ca0345533d5bde5a17b58ccf_prof);

        
        $__internal_6c9c85c8f1ce3295dd42df8ba20b7097ed51e17e2f85d6ce1df42bc9628dd0f4->leave($__internal_6c9c85c8f1ce3295dd42df8ba20b7097ed51e17e2f85d6ce1df42bc9628dd0f4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/home/nicolaescu/Workspace/Car-Rental/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
