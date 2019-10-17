<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_88aaae16a56fbb0994b7e4e05653c058b21cec3f4270ad26f9d253ec15a895d0 extends Twig_Template
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
        $__internal_b5e0db88a7f87e4858d80f0b6c913260b601fae42118ce3a1c75233e239005cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5e0db88a7f87e4858d80f0b6c913260b601fae42118ce3a1c75233e239005cb->enter($__internal_b5e0db88a7f87e4858d80f0b6c913260b601fae42118ce3a1c75233e239005cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_2230bb51d79fffe3e80e206601bbe854f2a26b8c372aa41b5e122994d3670cfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2230bb51d79fffe3e80e206601bbe854f2a26b8c372aa41b5e122994d3670cfe->enter($__internal_2230bb51d79fffe3e80e206601bbe854f2a26b8c372aa41b5e122994d3670cfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_b5e0db88a7f87e4858d80f0b6c913260b601fae42118ce3a1c75233e239005cb->leave($__internal_b5e0db88a7f87e4858d80f0b6c913260b601fae42118ce3a1c75233e239005cb_prof);

        
        $__internal_2230bb51d79fffe3e80e206601bbe854f2a26b8c372aa41b5e122994d3670cfe->leave($__internal_2230bb51d79fffe3e80e206601bbe854f2a26b8c372aa41b5e122994d3670cfe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/home/nicolaescu/Workspace/Car-Rental/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
