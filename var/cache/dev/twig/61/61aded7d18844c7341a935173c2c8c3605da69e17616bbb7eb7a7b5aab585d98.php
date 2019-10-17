<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_b70bf1d6393b343b1651d4ae18209ba1659fe280f65134ffd4ff8d16a4149b93 extends Twig_Template
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
        $__internal_c10361b64430d43eef0dc6b325c7af62612baa0067f92afe9b8235f610c01142 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c10361b64430d43eef0dc6b325c7af62612baa0067f92afe9b8235f610c01142->enter($__internal_c10361b64430d43eef0dc6b325c7af62612baa0067f92afe9b8235f610c01142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_70a2eef90c01bec8f8ba7a31c9aacb27841b91a59bc1379cce24bf7c7c28ba1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70a2eef90c01bec8f8ba7a31c9aacb27841b91a59bc1379cce24bf7c7c28ba1f->enter($__internal_70a2eef90c01bec8f8ba7a31c9aacb27841b91a59bc1379cce24bf7c7c28ba1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_c10361b64430d43eef0dc6b325c7af62612baa0067f92afe9b8235f610c01142->leave($__internal_c10361b64430d43eef0dc6b325c7af62612baa0067f92afe9b8235f610c01142_prof);

        
        $__internal_70a2eef90c01bec8f8ba7a31c9aacb27841b91a59bc1379cce24bf7c7c28ba1f->leave($__internal_70a2eef90c01bec8f8ba7a31c9aacb27841b91a59bc1379cce24bf7c7c28ba1f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/home/nicolaescu/Workspace/Car-Rental/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
