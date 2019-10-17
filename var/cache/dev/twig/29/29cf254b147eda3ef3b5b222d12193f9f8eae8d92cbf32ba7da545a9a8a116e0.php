<?php

/* @Framework/Form/tel_widget.html.php */
class __TwigTemplate_82704a042932402e9fae41617da453df342613954faf0c2211949e0ce88c3faa extends Twig_Template
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
        $__internal_ddcecc767fba7d57d3d9fae24b887f905bd57930de76dc01e20ddae874185028 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddcecc767fba7d57d3d9fae24b887f905bd57930de76dc01e20ddae874185028->enter($__internal_ddcecc767fba7d57d3d9fae24b887f905bd57930de76dc01e20ddae874185028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/tel_widget.html.php"));

        $__internal_64f5845d47378d2ec0e137fa7f66671682a3a76b94b2c89e0aced72e5be33d10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64f5845d47378d2ec0e137fa7f66671682a3a76b94b2c89e0aced72e5be33d10->enter($__internal_64f5845d47378d2ec0e137fa7f66671682a3a76b94b2c89e0aced72e5be33d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/tel_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'tel'));
";
        
        $__internal_ddcecc767fba7d57d3d9fae24b887f905bd57930de76dc01e20ddae874185028->leave($__internal_ddcecc767fba7d57d3d9fae24b887f905bd57930de76dc01e20ddae874185028_prof);

        
        $__internal_64f5845d47378d2ec0e137fa7f66671682a3a76b94b2c89e0aced72e5be33d10->leave($__internal_64f5845d47378d2ec0e137fa7f66671682a3a76b94b2c89e0aced72e5be33d10_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/tel_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'tel'));
", "@Framework/Form/tel_widget.html.php", "/home/nicolaescu/Workspace/Car-Rental/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/tel_widget.html.php");
    }
}
