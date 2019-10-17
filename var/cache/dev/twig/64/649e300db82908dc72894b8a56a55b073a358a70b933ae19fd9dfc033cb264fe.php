<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_756c34bc953d00c3f5b6a17d52be22db0c8ef62590b92cc920531eabf2231e82 extends Twig_Template
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
        $__internal_0dd6cc711051d2f571112a040033ddd2f706cd4e8c5720088e1fbc1ddbb0b032 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dd6cc711051d2f571112a040033ddd2f706cd4e8c5720088e1fbc1ddbb0b032->enter($__internal_0dd6cc711051d2f571112a040033ddd2f706cd4e8c5720088e1fbc1ddbb0b032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_a81007dd2cb2f3e35aa74cd98db6399ff58945aca272fbfc377428fd9eb8d671 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a81007dd2cb2f3e35aa74cd98db6399ff58945aca272fbfc377428fd9eb8d671->enter($__internal_a81007dd2cb2f3e35aa74cd98db6399ff58945aca272fbfc377428fd9eb8d671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_0dd6cc711051d2f571112a040033ddd2f706cd4e8c5720088e1fbc1ddbb0b032->leave($__internal_0dd6cc711051d2f571112a040033ddd2f706cd4e8c5720088e1fbc1ddbb0b032_prof);

        
        $__internal_a81007dd2cb2f3e35aa74cd98db6399ff58945aca272fbfc377428fd9eb8d671->leave($__internal_a81007dd2cb2f3e35aa74cd98db6399ff58945aca272fbfc377428fd9eb8d671_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/home/nicolaescu/Workspace/Car-Rental/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
