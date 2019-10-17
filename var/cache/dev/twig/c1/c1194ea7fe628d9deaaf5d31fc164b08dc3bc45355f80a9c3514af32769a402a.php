<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_6a46984fd288958725c51add0c4d3ad9d1a408c64b52c0270406cd978ff6a30a extends Twig_Template
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
        $__internal_5398e093609b98f4db1f30e05054f478a37fbecd7d59a2908d0e09b3020e5d71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5398e093609b98f4db1f30e05054f478a37fbecd7d59a2908d0e09b3020e5d71->enter($__internal_5398e093609b98f4db1f30e05054f478a37fbecd7d59a2908d0e09b3020e5d71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_b7906dfeafcf6389f351af930df8f5f9fd1796ea37475c639490ab56526ab8d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7906dfeafcf6389f351af930df8f5f9fd1796ea37475c639490ab56526ab8d3->enter($__internal_b7906dfeafcf6389f351af930df8f5f9fd1796ea37475c639490ab56526ab8d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_5398e093609b98f4db1f30e05054f478a37fbecd7d59a2908d0e09b3020e5d71->leave($__internal_5398e093609b98f4db1f30e05054f478a37fbecd7d59a2908d0e09b3020e5d71_prof);

        
        $__internal_b7906dfeafcf6389f351af930df8f5f9fd1796ea37475c639490ab56526ab8d3->leave($__internal_b7906dfeafcf6389f351af930df8f5f9fd1796ea37475c639490ab56526ab8d3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/nicolaescu/Workspace/Car-Rental/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
