<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_eef7a73f6285febfd21c153098bdc89b4560d436bb8a8c2bf474f0f31afdb32f extends Twig_Template
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
        $__internal_31d695e3db607cb0ff665df304e87fdb3db7ab7f62a6b8b14a07fd8b09fdc131 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31d695e3db607cb0ff665df304e87fdb3db7ab7f62a6b8b14a07fd8b09fdc131->enter($__internal_31d695e3db607cb0ff665df304e87fdb3db7ab7f62a6b8b14a07fd8b09fdc131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_400db5305099d2228e07629c6744240f14c69d8d08e05fb2d22b49c6af70eef9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_400db5305099d2228e07629c6744240f14c69d8d08e05fb2d22b49c6af70eef9->enter($__internal_400db5305099d2228e07629c6744240f14c69d8d08e05fb2d22b49c6af70eef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_31d695e3db607cb0ff665df304e87fdb3db7ab7f62a6b8b14a07fd8b09fdc131->leave($__internal_31d695e3db607cb0ff665df304e87fdb3db7ab7f62a6b8b14a07fd8b09fdc131_prof);

        
        $__internal_400db5305099d2228e07629c6744240f14c69d8d08e05fb2d22b49c6af70eef9->leave($__internal_400db5305099d2228e07629c6744240f14c69d8d08e05fb2d22b49c6af70eef9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/nicolaescu/Workspace/Car-Rental/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
