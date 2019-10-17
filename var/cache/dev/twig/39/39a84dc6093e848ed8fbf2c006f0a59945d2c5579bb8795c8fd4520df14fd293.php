<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_6ce96a73fa6137e76f1700bc6cbb92129d81f513c3de628af49807c4702345fc extends Twig_Template
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
        $__internal_9db4a5cc6b689f390853fedd3d119fe709256d4b64dedb91c72f173236e8acdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9db4a5cc6b689f390853fedd3d119fe709256d4b64dedb91c72f173236e8acdd->enter($__internal_9db4a5cc6b689f390853fedd3d119fe709256d4b64dedb91c72f173236e8acdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        $__internal_2c9eebc4ae1d3c412de064eb70c986b4d5ab8694d2924304093e8967458463cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c9eebc4ae1d3c412de064eb70c986b4d5ab8694d2924304093e8967458463cd->enter($__internal_2c9eebc4ae1d3c412de064eb70c986b4d5ab8694d2924304093e8967458463cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_9db4a5cc6b689f390853fedd3d119fe709256d4b64dedb91c72f173236e8acdd->leave($__internal_9db4a5cc6b689f390853fedd3d119fe709256d4b64dedb91c72f173236e8acdd_prof);

        
        $__internal_2c9eebc4ae1d3c412de064eb70c986b4d5ab8694d2924304093e8967458463cd->leave($__internal_2c9eebc4ae1d3c412de064eb70c986b4d5ab8694d2924304093e8967458463cd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "/home/nicolaescu/Workspace/Car-Rental/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/range_widget.html.php");
    }
}
