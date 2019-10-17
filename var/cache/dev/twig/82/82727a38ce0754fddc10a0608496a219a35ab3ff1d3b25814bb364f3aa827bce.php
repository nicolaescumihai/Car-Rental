<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_ce7bc86acbcc82d0f881c635080c5412ae1a000a38287b31a0eb8ade641e55ef extends Twig_Template
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
        $__internal_75869efb67eca0c86d6af836f9652a77c4323647875c8984f154b8174bd9af4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75869efb67eca0c86d6af836f9652a77c4323647875c8984f154b8174bd9af4d->enter($__internal_75869efb67eca0c86d6af836f9652a77c4323647875c8984f154b8174bd9af4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_7cb017c2ac2b475fe81cf3dc1430f2939119b1d5dbde3ab16acfe576418eebfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cb017c2ac2b475fe81cf3dc1430f2939119b1d5dbde3ab16acfe576418eebfb->enter($__internal_7cb017c2ac2b475fe81cf3dc1430f2939119b1d5dbde3ab16acfe576418eebfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_75869efb67eca0c86d6af836f9652a77c4323647875c8984f154b8174bd9af4d->leave($__internal_75869efb67eca0c86d6af836f9652a77c4323647875c8984f154b8174bd9af4d_prof);

        
        $__internal_7cb017c2ac2b475fe81cf3dc1430f2939119b1d5dbde3ab16acfe576418eebfb->leave($__internal_7cb017c2ac2b475fe81cf3dc1430f2939119b1d5dbde3ab16acfe576418eebfb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/home/nicolaescu/Workspace/Car-Rental/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
