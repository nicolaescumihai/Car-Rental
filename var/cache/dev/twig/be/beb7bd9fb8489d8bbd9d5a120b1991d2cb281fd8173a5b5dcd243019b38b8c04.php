<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_d5ee645282afa89d39e328f7fcb13150195c9f216bbef0a6ee09d59d0fd01910 extends Twig_Template
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
        $__internal_963151cff17e7d576e223f8270f204946de68d7dc5914fc6dafc555ae9579265 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_963151cff17e7d576e223f8270f204946de68d7dc5914fc6dafc555ae9579265->enter($__internal_963151cff17e7d576e223f8270f204946de68d7dc5914fc6dafc555ae9579265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_1dc7ed4b0e3ff4a30868cd338d3e01bd6dfe409326ebf1e917abf169b757ebf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dc7ed4b0e3ff4a30868cd338d3e01bd6dfe409326ebf1e917abf169b757ebf7->enter($__internal_1dc7ed4b0e3ff4a30868cd338d3e01bd6dfe409326ebf1e917abf169b757ebf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_963151cff17e7d576e223f8270f204946de68d7dc5914fc6dafc555ae9579265->leave($__internal_963151cff17e7d576e223f8270f204946de68d7dc5914fc6dafc555ae9579265_prof);

        
        $__internal_1dc7ed4b0e3ff4a30868cd338d3e01bd6dfe409326ebf1e917abf169b757ebf7->leave($__internal_1dc7ed4b0e3ff4a30868cd338d3e01bd6dfe409326ebf1e917abf169b757ebf7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/nicolaescu/Workspace/Car-Rental/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
