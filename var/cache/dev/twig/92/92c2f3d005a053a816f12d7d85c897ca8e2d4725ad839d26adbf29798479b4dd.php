<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_5724d3f3ccdb7dc8a131763dc3ddfa3401f8e3666e5b03bd6b6162176e2d0f4d extends Twig_Template
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
        $__internal_5803c7390de5f0d634d2a0902a4de3a3a074cad51d27c390b95689b13b0ed6b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5803c7390de5f0d634d2a0902a4de3a3a074cad51d27c390b95689b13b0ed6b1->enter($__internal_5803c7390de5f0d634d2a0902a4de3a3a074cad51d27c390b95689b13b0ed6b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_10528a9c21521cd88a8a68e069c34746bf937264e4bd6ac739d2cb34e225cce2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10528a9c21521cd88a8a68e069c34746bf937264e4bd6ac739d2cb34e225cce2->enter($__internal_10528a9c21521cd88a8a68e069c34746bf937264e4bd6ac739d2cb34e225cce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_5803c7390de5f0d634d2a0902a4de3a3a074cad51d27c390b95689b13b0ed6b1->leave($__internal_5803c7390de5f0d634d2a0902a4de3a3a074cad51d27c390b95689b13b0ed6b1_prof);

        
        $__internal_10528a9c21521cd88a8a68e069c34746bf937264e4bd6ac739d2cb34e225cce2->leave($__internal_10528a9c21521cd88a8a68e069c34746bf937264e4bd6ac739d2cb34e225cce2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/home/nicolaescu/Workspace/Car-Rental/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
