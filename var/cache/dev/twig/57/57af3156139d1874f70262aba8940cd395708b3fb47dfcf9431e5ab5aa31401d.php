<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_75e9861a5a7e8ccb4a1230e17e357a8ad382e6455b5b5d0155bdda9a94fe46fc extends Twig_Template
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
        $__internal_45f8da3cb02d65457540ed8908b4189c0800db4228a2811bb4b3e2e3d3c4b9cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45f8da3cb02d65457540ed8908b4189c0800db4228a2811bb4b3e2e3d3c4b9cf->enter($__internal_45f8da3cb02d65457540ed8908b4189c0800db4228a2811bb4b3e2e3d3c4b9cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_c55371fc2b8d3e5ac7f5c6c6922bd76827258df970255fac9609899eda7ba31e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c55371fc2b8d3e5ac7f5c6c6922bd76827258df970255fac9609899eda7ba31e->enter($__internal_c55371fc2b8d3e5ac7f5c6c6922bd76827258df970255fac9609899eda7ba31e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_45f8da3cb02d65457540ed8908b4189c0800db4228a2811bb4b3e2e3d3c4b9cf->leave($__internal_45f8da3cb02d65457540ed8908b4189c0800db4228a2811bb4b3e2e3d3c4b9cf_prof);

        
        $__internal_c55371fc2b8d3e5ac7f5c6c6922bd76827258df970255fac9609899eda7ba31e->leave($__internal_c55371fc2b8d3e5ac7f5c6c6922bd76827258df970255fac9609899eda7ba31e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/nicolaescu/Workspace/Car-Rental/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
