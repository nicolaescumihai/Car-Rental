<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_77ef7a368468ebd03d6e5e9de1d31267f954282a16ed07a819d398585d483413 extends Twig_Template
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
        $__internal_25e7d3434c08364588f63f893dec75d0a26a4835fb2845f521236699e6acc390 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25e7d3434c08364588f63f893dec75d0a26a4835fb2845f521236699e6acc390->enter($__internal_25e7d3434c08364588f63f893dec75d0a26a4835fb2845f521236699e6acc390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_bc3a71985782e2f8033345e1a1dc8da901d5573a06a7fea2f46bb9b8976f1d0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc3a71985782e2f8033345e1a1dc8da901d5573a06a7fea2f46bb9b8976f1d0a->enter($__internal_bc3a71985782e2f8033345e1a1dc8da901d5573a06a7fea2f46bb9b8976f1d0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_25e7d3434c08364588f63f893dec75d0a26a4835fb2845f521236699e6acc390->leave($__internal_25e7d3434c08364588f63f893dec75d0a26a4835fb2845f521236699e6acc390_prof);

        
        $__internal_bc3a71985782e2f8033345e1a1dc8da901d5573a06a7fea2f46bb9b8976f1d0a->leave($__internal_bc3a71985782e2f8033345e1a1dc8da901d5573a06a7fea2f46bb9b8976f1d0a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/nicolaescu/Workspace/Car-Rental/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
