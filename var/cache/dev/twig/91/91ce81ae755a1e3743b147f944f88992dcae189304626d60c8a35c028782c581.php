<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_20a28ef4238c3fd4eea833eb708d205e54ef600892db807403d061d65ee6affb extends Twig_Template
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
        $__internal_de3e8e8b266a4d41390d031a114b3478531188e94ae9b4819178fbb34b883071 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de3e8e8b266a4d41390d031a114b3478531188e94ae9b4819178fbb34b883071->enter($__internal_de3e8e8b266a4d41390d031a114b3478531188e94ae9b4819178fbb34b883071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_a3afed83ccaea835e161fa4b17b27c98ef69f8658eaa05ca0915583a1a1c45c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3afed83ccaea835e161fa4b17b27c98ef69f8658eaa05ca0915583a1a1c45c8->enter($__internal_a3afed83ccaea835e161fa4b17b27c98ef69f8658eaa05ca0915583a1a1c45c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_de3e8e8b266a4d41390d031a114b3478531188e94ae9b4819178fbb34b883071->leave($__internal_de3e8e8b266a4d41390d031a114b3478531188e94ae9b4819178fbb34b883071_prof);

        
        $__internal_a3afed83ccaea835e161fa4b17b27c98ef69f8658eaa05ca0915583a1a1c45c8->leave($__internal_a3afed83ccaea835e161fa4b17b27c98ef69f8658eaa05ca0915583a1a1c45c8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "/home/nicolaescu/Workspace/Car-Rental/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
