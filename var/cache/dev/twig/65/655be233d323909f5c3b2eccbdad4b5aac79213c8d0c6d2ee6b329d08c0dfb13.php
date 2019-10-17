<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_2c660cb7a0f7d45756af94732254132fe7cc4fa5e6f0ed24505da35ee5c6e1db extends Twig_Template
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
        $__internal_69ef624d27c5a399feb75c4693d2b8ffd727a6300c165a7b56ec7f897d83a0ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69ef624d27c5a399feb75c4693d2b8ffd727a6300c165a7b56ec7f897d83a0ca->enter($__internal_69ef624d27c5a399feb75c4693d2b8ffd727a6300c165a7b56ec7f897d83a0ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_267c35901f4daa9dedab466e54130db2b89530fa87e0991f6b816addc92af4b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_267c35901f4daa9dedab466e54130db2b89530fa87e0991f6b816addc92af4b7->enter($__internal_267c35901f4daa9dedab466e54130db2b89530fa87e0991f6b816addc92af4b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_69ef624d27c5a399feb75c4693d2b8ffd727a6300c165a7b56ec7f897d83a0ca->leave($__internal_69ef624d27c5a399feb75c4693d2b8ffd727a6300c165a7b56ec7f897d83a0ca_prof);

        
        $__internal_267c35901f4daa9dedab466e54130db2b89530fa87e0991f6b816addc92af4b7->leave($__internal_267c35901f4daa9dedab466e54130db2b89530fa87e0991f6b816addc92af4b7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/nicolaescu/Workspace/Car-Rental/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
