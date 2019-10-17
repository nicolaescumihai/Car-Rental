<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_baf14e1f18bfa2d21f266e27f5ae780a320654b1029eae4f561c56587c44efca extends Twig_Template
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
        $__internal_59003a7dcde4114f21fde0e471cb9c453796af25e58e0ea81f96c1d3b8ca619e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59003a7dcde4114f21fde0e471cb9c453796af25e58e0ea81f96c1d3b8ca619e->enter($__internal_59003a7dcde4114f21fde0e471cb9c453796af25e58e0ea81f96c1d3b8ca619e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_2714e7f2cb333073d2919e3985d7c2f60a775879f30589a4d68d9e3167e85033 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2714e7f2cb333073d2919e3985d7c2f60a775879f30589a4d68d9e3167e85033->enter($__internal_2714e7f2cb333073d2919e3985d7c2f60a775879f30589a4d68d9e3167e85033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_59003a7dcde4114f21fde0e471cb9c453796af25e58e0ea81f96c1d3b8ca619e->leave($__internal_59003a7dcde4114f21fde0e471cb9c453796af25e58e0ea81f96c1d3b8ca619e_prof);

        
        $__internal_2714e7f2cb333073d2919e3985d7c2f60a775879f30589a4d68d9e3167e85033->leave($__internal_2714e7f2cb333073d2919e3985d7c2f60a775879f30589a4d68d9e3167e85033_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/home/nicolaescu/Workspace/Car-Rental/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
