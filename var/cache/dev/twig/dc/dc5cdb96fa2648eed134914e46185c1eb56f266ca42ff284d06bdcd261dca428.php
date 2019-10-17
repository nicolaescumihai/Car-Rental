<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_e427ee205a7acacac0c0fe2c282c552d4da47483f8137c1566b3885ac07131bb extends Twig_Template
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
        $__internal_ce00589297ca9cf39c4f6a82001543b187eeea71e9fecf8915eac71b2021a00e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce00589297ca9cf39c4f6a82001543b187eeea71e9fecf8915eac71b2021a00e->enter($__internal_ce00589297ca9cf39c4f6a82001543b187eeea71e9fecf8915eac71b2021a00e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_e8b9842b14f9f47048089e27191208ebfbda61fe371de6d77e16695c1a67472a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8b9842b14f9f47048089e27191208ebfbda61fe371de6d77e16695c1a67472a->enter($__internal_e8b9842b14f9f47048089e27191208ebfbda61fe371de6d77e16695c1a67472a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_ce00589297ca9cf39c4f6a82001543b187eeea71e9fecf8915eac71b2021a00e->leave($__internal_ce00589297ca9cf39c4f6a82001543b187eeea71e9fecf8915eac71b2021a00e_prof);

        
        $__internal_e8b9842b14f9f47048089e27191208ebfbda61fe371de6d77e16695c1a67472a->leave($__internal_e8b9842b14f9f47048089e27191208ebfbda61fe371de6d77e16695c1a67472a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/home/nicolaescu/Workspace/Car-Rental/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
