<?php

/* @Framework/Form/color_widget.html.php */
class __TwigTemplate_a31bc568f520fba15a837bd35c367476c0fc929edbf8ea58155a7fc4d85649e4 extends Twig_Template
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
        $__internal_c62ac70e23ccb64f5c81b6f6f869f5cadd5073d4173ff2202c382d7360e0da82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c62ac70e23ccb64f5c81b6f6f869f5cadd5073d4173ff2202c382d7360e0da82->enter($__internal_c62ac70e23ccb64f5c81b6f6f869f5cadd5073d4173ff2202c382d7360e0da82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/color_widget.html.php"));

        $__internal_9c56359ab552cf4b77d7a56e96cc959e7ad51ca1ddef4684eee3b89232673a63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c56359ab552cf4b77d7a56e96cc959e7ad51ca1ddef4684eee3b89232673a63->enter($__internal_9c56359ab552cf4b77d7a56e96cc959e7ad51ca1ddef4684eee3b89232673a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/color_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'color'));
";
        
        $__internal_c62ac70e23ccb64f5c81b6f6f869f5cadd5073d4173ff2202c382d7360e0da82->leave($__internal_c62ac70e23ccb64f5c81b6f6f869f5cadd5073d4173ff2202c382d7360e0da82_prof);

        
        $__internal_9c56359ab552cf4b77d7a56e96cc959e7ad51ca1ddef4684eee3b89232673a63->leave($__internal_9c56359ab552cf4b77d7a56e96cc959e7ad51ca1ddef4684eee3b89232673a63_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/color_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'color'));
", "@Framework/Form/color_widget.html.php", "/home/nicolaescu/Workspace/Car-Rental/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/color_widget.html.php");
    }
}
