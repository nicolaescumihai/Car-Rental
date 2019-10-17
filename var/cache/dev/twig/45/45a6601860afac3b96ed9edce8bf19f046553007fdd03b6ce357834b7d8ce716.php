<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_e7f52ad4dc6900e383c89c864e2a500424dffa98cf3aea339b5007c2bc6df84c extends Twig_Template
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
        $__internal_8f80439a29c7c5844fcc7b11d0aa1fdf16b59b2bfb9be9d9d388770bb3f2197c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f80439a29c7c5844fcc7b11d0aa1fdf16b59b2bfb9be9d9d388770bb3f2197c->enter($__internal_8f80439a29c7c5844fcc7b11d0aa1fdf16b59b2bfb9be9d9d388770bb3f2197c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_d362a3005a2574ec4c1954f1887c4e943f20a3c964ec5fe8bda90e436c434743 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d362a3005a2574ec4c1954f1887c4e943f20a3c964ec5fe8bda90e436c434743->enter($__internal_d362a3005a2574ec4c1954f1887c4e943f20a3c964ec5fe8bda90e436c434743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_8f80439a29c7c5844fcc7b11d0aa1fdf16b59b2bfb9be9d9d388770bb3f2197c->leave($__internal_8f80439a29c7c5844fcc7b11d0aa1fdf16b59b2bfb9be9d9d388770bb3f2197c_prof);

        
        $__internal_d362a3005a2574ec4c1954f1887c4e943f20a3c964ec5fe8bda90e436c434743->leave($__internal_d362a3005a2574ec4c1954f1887c4e943f20a3c964ec5fe8bda90e436c434743_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/nicolaescu/Workspace/Car-Rental/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
