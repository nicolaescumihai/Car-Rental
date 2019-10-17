<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_270f3ced0fe68d53807b23a10cd94582f17587c0b868fa2b696f0fe0a22cbfbb extends Twig_Template
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
        $__internal_4ddd93c3b4bb3993ef5e3f538fa7ff0e119d98008136024781107de260775bcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ddd93c3b4bb3993ef5e3f538fa7ff0e119d98008136024781107de260775bcb->enter($__internal_4ddd93c3b4bb3993ef5e3f538fa7ff0e119d98008136024781107de260775bcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_642bcf6d89c44d58012de026c3bb942c0fd3446fc3bc55016dfce65c6b810c65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_642bcf6d89c44d58012de026c3bb942c0fd3446fc3bc55016dfce65c6b810c65->enter($__internal_642bcf6d89c44d58012de026c3bb942c0fd3446fc3bc55016dfce65c6b810c65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_4ddd93c3b4bb3993ef5e3f538fa7ff0e119d98008136024781107de260775bcb->leave($__internal_4ddd93c3b4bb3993ef5e3f538fa7ff0e119d98008136024781107de260775bcb_prof);

        
        $__internal_642bcf6d89c44d58012de026c3bb942c0fd3446fc3bc55016dfce65c6b810c65->leave($__internal_642bcf6d89c44d58012de026c3bb942c0fd3446fc3bc55016dfce65c6b810c65_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/nicolaescu/Workspace/Car-Rental/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
