<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_7183c191414e3bd56cd5fcbab8218a31f093d4252e52e1d8a822f4ff9f5e9d8b extends Twig_Template
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
        $__internal_397d894e896f5cf8c70479e3858939a30fa56e86d964b5a9f854e2bf610ef86f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_397d894e896f5cf8c70479e3858939a30fa56e86d964b5a9f854e2bf610ef86f->enter($__internal_397d894e896f5cf8c70479e3858939a30fa56e86d964b5a9f854e2bf610ef86f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_02d43676fd0e364567ebe752a6b43e5b535e1550bdd45d9a0ed72374034240b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02d43676fd0e364567ebe752a6b43e5b535e1550bdd45d9a0ed72374034240b6->enter($__internal_02d43676fd0e364567ebe752a6b43e5b535e1550bdd45d9a0ed72374034240b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_397d894e896f5cf8c70479e3858939a30fa56e86d964b5a9f854e2bf610ef86f->leave($__internal_397d894e896f5cf8c70479e3858939a30fa56e86d964b5a9f854e2bf610ef86f_prof);

        
        $__internal_02d43676fd0e364567ebe752a6b43e5b535e1550bdd45d9a0ed72374034240b6->leave($__internal_02d43676fd0e364567ebe752a6b43e5b535e1550bdd45d9a0ed72374034240b6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/nicolaescu/Workspace/Car-Rental/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
