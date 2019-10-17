<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_92aa9db07e4226b6d58a291200a855443e639981635f7bb8b114fb16e88236e2 extends Twig_Template
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
        $__internal_a70cfc2b6e5ee303ceae67fd4ec69bdb2cc952b7494a3b3b4dd4e9afeae94917 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a70cfc2b6e5ee303ceae67fd4ec69bdb2cc952b7494a3b3b4dd4e9afeae94917->enter($__internal_a70cfc2b6e5ee303ceae67fd4ec69bdb2cc952b7494a3b3b4dd4e9afeae94917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_72dafabddcf89bae08c943648e6605e3e5f77fba51b19ad95b157075f660b6bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72dafabddcf89bae08c943648e6605e3e5f77fba51b19ad95b157075f660b6bf->enter($__internal_72dafabddcf89bae08c943648e6605e3e5f77fba51b19ad95b157075f660b6bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_a70cfc2b6e5ee303ceae67fd4ec69bdb2cc952b7494a3b3b4dd4e9afeae94917->leave($__internal_a70cfc2b6e5ee303ceae67fd4ec69bdb2cc952b7494a3b3b4dd4e9afeae94917_prof);

        
        $__internal_72dafabddcf89bae08c943648e6605e3e5f77fba51b19ad95b157075f660b6bf->leave($__internal_72dafabddcf89bae08c943648e6605e3e5f77fba51b19ad95b157075f660b6bf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/home/nicolaescu/Workspace/Car-Rental/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
