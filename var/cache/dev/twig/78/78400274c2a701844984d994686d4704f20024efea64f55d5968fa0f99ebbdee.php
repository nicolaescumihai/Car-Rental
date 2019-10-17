<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_9da8f63ca8b1eab5570cdbed667747734f2af0e6c8e7f4038b6c3825760a2410 extends Twig_Template
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
        $__internal_e7aca5c31aefe86556ae849641fd19934ba0b39930c2de4072044073c78b0481 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7aca5c31aefe86556ae849641fd19934ba0b39930c2de4072044073c78b0481->enter($__internal_e7aca5c31aefe86556ae849641fd19934ba0b39930c2de4072044073c78b0481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_ebdb8a39ff1d1d02468ae55e7fabdab389f2815d24b1cac58fe9f57ff77754e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebdb8a39ff1d1d02468ae55e7fabdab389f2815d24b1cac58fe9f57ff77754e8->enter($__internal_ebdb8a39ff1d1d02468ae55e7fabdab389f2815d24b1cac58fe9f57ff77754e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_e7aca5c31aefe86556ae849641fd19934ba0b39930c2de4072044073c78b0481->leave($__internal_e7aca5c31aefe86556ae849641fd19934ba0b39930c2de4072044073c78b0481_prof);

        
        $__internal_ebdb8a39ff1d1d02468ae55e7fabdab389f2815d24b1cac58fe9f57ff77754e8->leave($__internal_ebdb8a39ff1d1d02468ae55e7fabdab389f2815d24b1cac58fe9f57ff77754e8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/nicolaescu/Workspace/Car-Rental/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
