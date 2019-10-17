<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_174a9ab757e1a0e251880b4a86f1e5d368f52af1903e91e9237b27d09059b5df extends Twig_Template
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
        $__internal_236e6ddb4196527f2eec61d993c01ac920075d2ca600b30cad18dadcb1af5c23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_236e6ddb4196527f2eec61d993c01ac920075d2ca600b30cad18dadcb1af5c23->enter($__internal_236e6ddb4196527f2eec61d993c01ac920075d2ca600b30cad18dadcb1af5c23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_c114b4e9ebb1d37572e11d3d256d654feed4dea3e1fd85ab5a2eaa869411db5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c114b4e9ebb1d37572e11d3d256d654feed4dea3e1fd85ab5a2eaa869411db5d->enter($__internal_c114b4e9ebb1d37572e11d3d256d654feed4dea3e1fd85ab5a2eaa869411db5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_236e6ddb4196527f2eec61d993c01ac920075d2ca600b30cad18dadcb1af5c23->leave($__internal_236e6ddb4196527f2eec61d993c01ac920075d2ca600b30cad18dadcb1af5c23_prof);

        
        $__internal_c114b4e9ebb1d37572e11d3d256d654feed4dea3e1fd85ab5a2eaa869411db5d->leave($__internal_c114b4e9ebb1d37572e11d3d256d654feed4dea3e1fd85ab5a2eaa869411db5d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/nicolaescu/Workspace/Car-Rental/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
