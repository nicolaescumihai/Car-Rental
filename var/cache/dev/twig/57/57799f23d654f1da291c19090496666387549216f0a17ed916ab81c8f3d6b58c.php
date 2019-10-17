<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_93326da2ba0fa9adaef637d2262fce0aaf8fe1f245424e9c6621ea33d476cbc4 extends Twig_Template
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
        $__internal_fc8c789c55658c751e828fc6ea37c8c9d014d695d2fa6fb8ab5d14f19a39165d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc8c789c55658c751e828fc6ea37c8c9d014d695d2fa6fb8ab5d14f19a39165d->enter($__internal_fc8c789c55658c751e828fc6ea37c8c9d014d695d2fa6fb8ab5d14f19a39165d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_11e62cd3cd0efd263b784b89b8f20aa5009609a5b9bf0ea5d3a9f5bfb13cfab0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11e62cd3cd0efd263b784b89b8f20aa5009609a5b9bf0ea5d3a9f5bfb13cfab0->enter($__internal_11e62cd3cd0efd263b784b89b8f20aa5009609a5b9bf0ea5d3a9f5bfb13cfab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_fc8c789c55658c751e828fc6ea37c8c9d014d695d2fa6fb8ab5d14f19a39165d->leave($__internal_fc8c789c55658c751e828fc6ea37c8c9d014d695d2fa6fb8ab5d14f19a39165d_prof);

        
        $__internal_11e62cd3cd0efd263b784b89b8f20aa5009609a5b9bf0ea5d3a9f5bfb13cfab0->leave($__internal_11e62cd3cd0efd263b784b89b8f20aa5009609a5b9bf0ea5d3a9f5bfb13cfab0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/nicolaescu/Workspace/Car-Rental/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
