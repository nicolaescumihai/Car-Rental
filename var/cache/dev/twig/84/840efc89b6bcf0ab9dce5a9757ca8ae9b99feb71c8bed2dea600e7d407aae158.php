<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_b77545ef997ed6bb04b0e3de47a81ff1a8c2a953a9a94da4617ea1a8682e45f7 extends Twig_Template
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
        $__internal_b99e8d7a694d96d2089392e471c4160687d94673e9bf8ea0c23158dae61a1c2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b99e8d7a694d96d2089392e471c4160687d94673e9bf8ea0c23158dae61a1c2c->enter($__internal_b99e8d7a694d96d2089392e471c4160687d94673e9bf8ea0c23158dae61a1c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_8d98f28927df8455404978c9854919afb71e77baaf3371a8373001dcc6d1c7be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d98f28927df8455404978c9854919afb71e77baaf3371a8373001dcc6d1c7be->enter($__internal_8d98f28927df8455404978c9854919afb71e77baaf3371a8373001dcc6d1c7be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_b99e8d7a694d96d2089392e471c4160687d94673e9bf8ea0c23158dae61a1c2c->leave($__internal_b99e8d7a694d96d2089392e471c4160687d94673e9bf8ea0c23158dae61a1c2c_prof);

        
        $__internal_8d98f28927df8455404978c9854919afb71e77baaf3371a8373001dcc6d1c7be->leave($__internal_8d98f28927df8455404978c9854919afb71e77baaf3371a8373001dcc6d1c7be_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/home/nicolaescu/Workspace/Car-Rental/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
