<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_4f07e3c281c3580a06da25cb1bfbad02fcd253155a1264545761af8283eaa1e0 extends Twig_Template
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
        $__internal_aed6d9180770444eef5ebbdda20bbacf450e6a29484f71bf4b0b99c79a60a444 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aed6d9180770444eef5ebbdda20bbacf450e6a29484f71bf4b0b99c79a60a444->enter($__internal_aed6d9180770444eef5ebbdda20bbacf450e6a29484f71bf4b0b99c79a60a444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_62cc1466a7ea58860581f436aeadf36615890664d5ea6e0717fe74ec6e50497d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62cc1466a7ea58860581f436aeadf36615890664d5ea6e0717fe74ec6e50497d->enter($__internal_62cc1466a7ea58860581f436aeadf36615890664d5ea6e0717fe74ec6e50497d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_aed6d9180770444eef5ebbdda20bbacf450e6a29484f71bf4b0b99c79a60a444->leave($__internal_aed6d9180770444eef5ebbdda20bbacf450e6a29484f71bf4b0b99c79a60a444_prof);

        
        $__internal_62cc1466a7ea58860581f436aeadf36615890664d5ea6e0717fe74ec6e50497d->leave($__internal_62cc1466a7ea58860581f436aeadf36615890664d5ea6e0717fe74ec6e50497d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/nicolaescu/Workspace/Car-Rental/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
