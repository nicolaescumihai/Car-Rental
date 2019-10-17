<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_d9eee2d3c0ad643ddc1bd65408537ab07b84b3f251803870a83a8f2c500780e4 extends Twig_Template
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
        $__internal_50cfacb004b0ae20ebe3fe5f05d61113172e3050d1add47de255b54db22cd2b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50cfacb004b0ae20ebe3fe5f05d61113172e3050d1add47de255b54db22cd2b9->enter($__internal_50cfacb004b0ae20ebe3fe5f05d61113172e3050d1add47de255b54db22cd2b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_af9cb7c097447540651ecfde1289cab1a9081ecd333fb4a3b88bebe605745a00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af9cb7c097447540651ecfde1289cab1a9081ecd333fb4a3b88bebe605745a00->enter($__internal_af9cb7c097447540651ecfde1289cab1a9081ecd333fb4a3b88bebe605745a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_50cfacb004b0ae20ebe3fe5f05d61113172e3050d1add47de255b54db22cd2b9->leave($__internal_50cfacb004b0ae20ebe3fe5f05d61113172e3050d1add47de255b54db22cd2b9_prof);

        
        $__internal_af9cb7c097447540651ecfde1289cab1a9081ecd333fb4a3b88bebe605745a00->leave($__internal_af9cb7c097447540651ecfde1289cab1a9081ecd333fb4a3b88bebe605745a00_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/nicolaescu/Workspace/Car-Rental/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
