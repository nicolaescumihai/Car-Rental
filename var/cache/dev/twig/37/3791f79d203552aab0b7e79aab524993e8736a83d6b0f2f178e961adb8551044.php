<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_94fc8a73273ab2ac89af17fec1b941fa53dfe383a370dca65e2821c683ed0c39 extends Twig_Template
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
        $__internal_ba1f7628cbf9ea51e57d1a607a6591bf1411ead525c847ebce62b1d6f51a39e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba1f7628cbf9ea51e57d1a607a6591bf1411ead525c847ebce62b1d6f51a39e7->enter($__internal_ba1f7628cbf9ea51e57d1a607a6591bf1411ead525c847ebce62b1d6f51a39e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_e9663e1d733dab512550e2d7f3a98dff31ec5ca1938b7470fceb4fa6d131a1df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9663e1d733dab512550e2d7f3a98dff31ec5ca1938b7470fceb4fa6d131a1df->enter($__internal_e9663e1d733dab512550e2d7f3a98dff31ec5ca1938b7470fceb4fa6d131a1df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_ba1f7628cbf9ea51e57d1a607a6591bf1411ead525c847ebce62b1d6f51a39e7->leave($__internal_ba1f7628cbf9ea51e57d1a607a6591bf1411ead525c847ebce62b1d6f51a39e7_prof);

        
        $__internal_e9663e1d733dab512550e2d7f3a98dff31ec5ca1938b7470fceb4fa6d131a1df->leave($__internal_e9663e1d733dab512550e2d7f3a98dff31ec5ca1938b7470fceb4fa6d131a1df_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/home/nicolaescu/Workspace/Car-Rental/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
