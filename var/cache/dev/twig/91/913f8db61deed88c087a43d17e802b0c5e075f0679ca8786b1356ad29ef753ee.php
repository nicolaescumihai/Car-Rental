<?php

/* AppBundle::test.html.twig */
class __TwigTemplate_f3c589ccaffd7686e9c956d960f32b38df709b1cc533685b41e6448951435cc7 extends Twig_Template
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
        $__internal_00c4d5c185a5168931051ada8a6e93330a4bf9590bd955f386a25191c17c8fa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00c4d5c185a5168931051ada8a6e93330a4bf9590bd955f386a25191c17c8fa9->enter($__internal_00c4d5c185a5168931051ada8a6e93330a4bf9590bd955f386a25191c17c8fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::test.html.twig"));

        $__internal_aa1a640effffc962ba2ec7bbb34ef286cb89d441dca45a744522d9547d10afef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa1a640effffc962ba2ec7bbb34ef286cb89d441dca45a744522d9547d10afef->enter($__internal_aa1a640effffc962ba2ec7bbb34ef286cb89d441dca45a744522d9547d10afef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::test.html.twig"));

        // line 1
        $this->loadTemplate("base.html.twig", "AppBundle::test.html.twig", 1)->display($context);
        // line 2
        echo "
";
        
        $__internal_00c4d5c185a5168931051ada8a6e93330a4bf9590bd955f386a25191c17c8fa9->leave($__internal_00c4d5c185a5168931051ada8a6e93330a4bf9590bd955f386a25191c17c8fa9_prof);

        
        $__internal_aa1a640effffc962ba2ec7bbb34ef286cb89d441dca45a744522d9547d10afef->leave($__internal_aa1a640effffc962ba2ec7bbb34ef286cb89d441dca45a744522d9547d10afef_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include \"base.html.twig\" %}

", "AppBundle::test.html.twig", "/home/nicolaescu/Workspace/Car-Rental/src/AppBundle/Resources/views/test.html.twig");
    }
}
