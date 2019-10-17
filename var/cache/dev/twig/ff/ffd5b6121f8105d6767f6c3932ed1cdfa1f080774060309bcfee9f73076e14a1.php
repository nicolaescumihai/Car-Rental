<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_6966b01f33298d5f0f8cc476a6c7b1e4f8db0dd3ccd07e8d16e3b9d263f8fc3c extends Twig_Template
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
        $__internal_5ecbbf26b1f228701e298183c025a4214a586f7798ad0ae641ef26791a51c44a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ecbbf26b1f228701e298183c025a4214a586f7798ad0ae641ef26791a51c44a->enter($__internal_5ecbbf26b1f228701e298183c025a4214a586f7798ad0ae641ef26791a51c44a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_e2e8822d1cbee29243853739ebdaceef3345df301d518c06206df870f71eee8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2e8822d1cbee29243853739ebdaceef3345df301d518c06206df870f71eee8d->enter($__internal_e2e8822d1cbee29243853739ebdaceef3345df301d518c06206df870f71eee8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_5ecbbf26b1f228701e298183c025a4214a586f7798ad0ae641ef26791a51c44a->leave($__internal_5ecbbf26b1f228701e298183c025a4214a586f7798ad0ae641ef26791a51c44a_prof);

        
        $__internal_e2e8822d1cbee29243853739ebdaceef3345df301d518c06206df870f71eee8d->leave($__internal_e2e8822d1cbee29243853739ebdaceef3345df301d518c06206df870f71eee8d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/home/nicolaescu/Workspace/Car-Rental/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
