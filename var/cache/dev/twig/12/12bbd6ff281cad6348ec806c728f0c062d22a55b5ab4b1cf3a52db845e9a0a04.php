<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_c3b5617b6616663785800a3b01ab5567ed6d0a26eba8762f547d18a0a70fa063 extends Twig_Template
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
        $__internal_1406c0fc66f1c4915fa6bf5579c21e54b713a50145c1454fd2c4984ec08c217e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1406c0fc66f1c4915fa6bf5579c21e54b713a50145c1454fd2c4984ec08c217e->enter($__internal_1406c0fc66f1c4915fa6bf5579c21e54b713a50145c1454fd2c4984ec08c217e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_dc7757cf8a57d04df60cfe9942f7c268c22acfed5508dc30ad02249b420a181a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc7757cf8a57d04df60cfe9942f7c268c22acfed5508dc30ad02249b420a181a->enter($__internal_dc7757cf8a57d04df60cfe9942f7c268c22acfed5508dc30ad02249b420a181a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_1406c0fc66f1c4915fa6bf5579c21e54b713a50145c1454fd2c4984ec08c217e->leave($__internal_1406c0fc66f1c4915fa6bf5579c21e54b713a50145c1454fd2c4984ec08c217e_prof);

        
        $__internal_dc7757cf8a57d04df60cfe9942f7c268c22acfed5508dc30ad02249b420a181a->leave($__internal_dc7757cf8a57d04df60cfe9942f7c268c22acfed5508dc30ad02249b420a181a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/home/nicolaescu/Workspace/Car-Rental/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
