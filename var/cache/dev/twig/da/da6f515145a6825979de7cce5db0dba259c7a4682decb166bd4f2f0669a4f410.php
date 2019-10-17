<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_b9ba03abfe6c1a9774b6d189b56d8620912b23a0a3224f0bebb1006cac24be4d extends Twig_Template
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
        $__internal_b9efaa2b741dd68ff44a86413475dfb8ee42976e98c113c33fdd477081e18a51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9efaa2b741dd68ff44a86413475dfb8ee42976e98c113c33fdd477081e18a51->enter($__internal_b9efaa2b741dd68ff44a86413475dfb8ee42976e98c113c33fdd477081e18a51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_8358bb1e6361b8869622cc9250919a152969d692335bea82d12a3c6e1782dffb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8358bb1e6361b8869622cc9250919a152969d692335bea82d12a3c6e1782dffb->enter($__internal_8358bb1e6361b8869622cc9250919a152969d692335bea82d12a3c6e1782dffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_b9efaa2b741dd68ff44a86413475dfb8ee42976e98c113c33fdd477081e18a51->leave($__internal_b9efaa2b741dd68ff44a86413475dfb8ee42976e98c113c33fdd477081e18a51_prof);

        
        $__internal_8358bb1e6361b8869622cc9250919a152969d692335bea82d12a3c6e1782dffb->leave($__internal_8358bb1e6361b8869622cc9250919a152969d692335bea82d12a3c6e1782dffb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/home/nicolaescu/Workspace/Car-Rental/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
