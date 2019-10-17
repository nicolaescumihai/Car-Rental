<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_73b838bc8ca3ed0aa8c1a2313614b15ee5161fc3af229c46f6d57c18b485eaa1 extends Twig_Template
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
        $__internal_dd32ee458de3038c26f96d29eff6febec45adce6bed4dc5ca2a0b7ed84c36138 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd32ee458de3038c26f96d29eff6febec45adce6bed4dc5ca2a0b7ed84c36138->enter($__internal_dd32ee458de3038c26f96d29eff6febec45adce6bed4dc5ca2a0b7ed84c36138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_295ea3e7fc5882b3ffbfba1e8cda3023d5d16475bd35e79264557b3afee0898d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_295ea3e7fc5882b3ffbfba1e8cda3023d5d16475bd35e79264557b3afee0898d->enter($__internal_295ea3e7fc5882b3ffbfba1e8cda3023d5d16475bd35e79264557b3afee0898d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_dd32ee458de3038c26f96d29eff6febec45adce6bed4dc5ca2a0b7ed84c36138->leave($__internal_dd32ee458de3038c26f96d29eff6febec45adce6bed4dc5ca2a0b7ed84c36138_prof);

        
        $__internal_295ea3e7fc5882b3ffbfba1e8cda3023d5d16475bd35e79264557b3afee0898d->leave($__internal_295ea3e7fc5882b3ffbfba1e8cda3023d5d16475bd35e79264557b3afee0898d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/nicolaescu/Workspace/Car-Rental/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
