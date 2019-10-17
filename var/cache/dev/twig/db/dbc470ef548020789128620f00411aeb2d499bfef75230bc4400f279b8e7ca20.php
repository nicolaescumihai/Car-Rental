<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_66ce3f2cdce8e78ec097a0c6094c57a44b79d8e5c4c015855506e38580abc315 extends Twig_Template
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
        $__internal_7edbbc30f644ab125c4ce26b7242e557561206e9c96b58710f0378ca14362f8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7edbbc30f644ab125c4ce26b7242e557561206e9c96b58710f0378ca14362f8a->enter($__internal_7edbbc30f644ab125c4ce26b7242e557561206e9c96b58710f0378ca14362f8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_b5be75a39a102b1b12ef00921290747ed87055116029843bd4eaf75aaf7da3e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5be75a39a102b1b12ef00921290747ed87055116029843bd4eaf75aaf7da3e4->enter($__internal_b5be75a39a102b1b12ef00921290747ed87055116029843bd4eaf75aaf7da3e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_7edbbc30f644ab125c4ce26b7242e557561206e9c96b58710f0378ca14362f8a->leave($__internal_7edbbc30f644ab125c4ce26b7242e557561206e9c96b58710f0378ca14362f8a_prof);

        
        $__internal_b5be75a39a102b1b12ef00921290747ed87055116029843bd4eaf75aaf7da3e4->leave($__internal_b5be75a39a102b1b12ef00921290747ed87055116029843bd4eaf75aaf7da3e4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/home/nicolaescu/Workspace/Car-Rental/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
