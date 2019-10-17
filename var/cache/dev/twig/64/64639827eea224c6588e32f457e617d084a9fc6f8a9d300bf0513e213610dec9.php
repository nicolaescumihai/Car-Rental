<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_e0daa9fba57eb8ed8c33c47766cfab8e7baac4000db01b90543b0247895b7558 extends Twig_Template
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
        $__internal_ad58843c66057224b118b1df347ef451cea5ad3b7dad4e7869115369593e1270 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad58843c66057224b118b1df347ef451cea5ad3b7dad4e7869115369593e1270->enter($__internal_ad58843c66057224b118b1df347ef451cea5ad3b7dad4e7869115369593e1270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_861e4143421ad6158db224ad616c48dd834c5ed65a164cc98f136fef9d0611ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_861e4143421ad6158db224ad616c48dd834c5ed65a164cc98f136fef9d0611ff->enter($__internal_861e4143421ad6158db224ad616c48dd834c5ed65a164cc98f136fef9d0611ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_ad58843c66057224b118b1df347ef451cea5ad3b7dad4e7869115369593e1270->leave($__internal_ad58843c66057224b118b1df347ef451cea5ad3b7dad4e7869115369593e1270_prof);

        
        $__internal_861e4143421ad6158db224ad616c48dd834c5ed65a164cc98f136fef9d0611ff->leave($__internal_861e4143421ad6158db224ad616c48dd834c5ed65a164cc98f136fef9d0611ff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/nicolaescu/Workspace/Car-Rental/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
