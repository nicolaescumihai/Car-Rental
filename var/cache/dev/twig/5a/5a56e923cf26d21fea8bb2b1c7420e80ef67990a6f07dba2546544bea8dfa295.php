<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_73ecaab4a33e0124724806494b089fe5ed4999ea0ee53c14c40541647bf0ac09 extends Twig_Template
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
        $__internal_718f88302da906410e34dc0863e0377692c31c5156749f2f2dd16a8f8babcf89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_718f88302da906410e34dc0863e0377692c31c5156749f2f2dd16a8f8babcf89->enter($__internal_718f88302da906410e34dc0863e0377692c31c5156749f2f2dd16a8f8babcf89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_5dd63d5fd4a2ab4f20aae71665c4596377c5840388fe4fe649e9e67bd3271909 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dd63d5fd4a2ab4f20aae71665c4596377c5840388fe4fe649e9e67bd3271909->enter($__internal_5dd63d5fd4a2ab4f20aae71665c4596377c5840388fe4fe649e9e67bd3271909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_718f88302da906410e34dc0863e0377692c31c5156749f2f2dd16a8f8babcf89->leave($__internal_718f88302da906410e34dc0863e0377692c31c5156749f2f2dd16a8f8babcf89_prof);

        
        $__internal_5dd63d5fd4a2ab4f20aae71665c4596377c5840388fe4fe649e9e67bd3271909->leave($__internal_5dd63d5fd4a2ab4f20aae71665c4596377c5840388fe4fe649e9e67bd3271909_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/home/nicolaescu/Workspace/Car-Rental/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
