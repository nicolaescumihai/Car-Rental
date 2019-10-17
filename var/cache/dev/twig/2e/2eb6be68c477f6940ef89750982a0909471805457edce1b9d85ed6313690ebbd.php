<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_15830011e220587d6e21dfb09c55c7a2f98755b87916f9de16dd51b8289d14d7 extends Twig_Template
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
        $__internal_69c438408039788f86cf88d7900df41cfe728e6fade768460ff062d06d676e02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69c438408039788f86cf88d7900df41cfe728e6fade768460ff062d06d676e02->enter($__internal_69c438408039788f86cf88d7900df41cfe728e6fade768460ff062d06d676e02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_8d5546424257ac476bc2748c60f91c5dd286ab51dc58fa743034236bea75777b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d5546424257ac476bc2748c60f91c5dd286ab51dc58fa743034236bea75777b->enter($__internal_8d5546424257ac476bc2748c60f91c5dd286ab51dc58fa743034236bea75777b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_69c438408039788f86cf88d7900df41cfe728e6fade768460ff062d06d676e02->leave($__internal_69c438408039788f86cf88d7900df41cfe728e6fade768460ff062d06d676e02_prof);

        
        $__internal_8d5546424257ac476bc2748c60f91c5dd286ab51dc58fa743034236bea75777b->leave($__internal_8d5546424257ac476bc2748c60f91c5dd286ab51dc58fa743034236bea75777b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/nicolaescu/Workspace/Car-Rental/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
