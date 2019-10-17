<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_e67b2e19843cd5dc4f0db64230097206af910446fe1550c27d7f865f6522e8e5 extends Twig_Template
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
        $__internal_7599c01c65c94398876a529efd60f878700c5ef6c145c1a2081f7a783e2c864b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7599c01c65c94398876a529efd60f878700c5ef6c145c1a2081f7a783e2c864b->enter($__internal_7599c01c65c94398876a529efd60f878700c5ef6c145c1a2081f7a783e2c864b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_44a0b896d4fb9e8d8ce4b24a04d4b61a11aff12f8fd64ba4b6783887b60681b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44a0b896d4fb9e8d8ce4b24a04d4b61a11aff12f8fd64ba4b6783887b60681b2->enter($__internal_44a0b896d4fb9e8d8ce4b24a04d4b61a11aff12f8fd64ba4b6783887b60681b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_7599c01c65c94398876a529efd60f878700c5ef6c145c1a2081f7a783e2c864b->leave($__internal_7599c01c65c94398876a529efd60f878700c5ef6c145c1a2081f7a783e2c864b_prof);

        
        $__internal_44a0b896d4fb9e8d8ce4b24a04d4b61a11aff12f8fd64ba4b6783887b60681b2->leave($__internal_44a0b896d4fb9e8d8ce4b24a04d4b61a11aff12f8fd64ba4b6783887b60681b2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/home/nicolaescu/Workspace/Car-Rental/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
