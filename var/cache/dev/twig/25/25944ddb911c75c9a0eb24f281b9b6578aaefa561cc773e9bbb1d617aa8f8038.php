<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_6d3ec270213b3cf0f526f13403d49292642363ea3deaac8bd357e927c6365216 extends Twig_Template
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
        $__internal_ece9ae5189750a925a72889159731fad9b759df1738bf84ed13fcfd54d22ce1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ece9ae5189750a925a72889159731fad9b759df1738bf84ed13fcfd54d22ce1a->enter($__internal_ece9ae5189750a925a72889159731fad9b759df1738bf84ed13fcfd54d22ce1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_4b0996a24eec1ecb203051b867c752428e81f7a4ccfbf02f891c213ef12dbd66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b0996a24eec1ecb203051b867c752428e81f7a4ccfbf02f891c213ef12dbd66->enter($__internal_4b0996a24eec1ecb203051b867c752428e81f7a4ccfbf02f891c213ef12dbd66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_ece9ae5189750a925a72889159731fad9b759df1738bf84ed13fcfd54d22ce1a->leave($__internal_ece9ae5189750a925a72889159731fad9b759df1738bf84ed13fcfd54d22ce1a_prof);

        
        $__internal_4b0996a24eec1ecb203051b867c752428e81f7a4ccfbf02f891c213ef12dbd66->leave($__internal_4b0996a24eec1ecb203051b867c752428e81f7a4ccfbf02f891c213ef12dbd66_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/nicolaescu/Workspace/Car-Rental/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
