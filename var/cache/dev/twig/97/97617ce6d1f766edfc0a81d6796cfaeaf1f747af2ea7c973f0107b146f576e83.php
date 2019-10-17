<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_9998bb3589cf4dde0eeb6d09b129174f6f1d9bd3ad25bc7e2709185d110cf5d4 extends Twig_Template
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
        $__internal_a6a7e61fc05abb950f80e709c4b61b4e81bbc84945ba18ec3bd1a7a0c2649911 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6a7e61fc05abb950f80e709c4b61b4e81bbc84945ba18ec3bd1a7a0c2649911->enter($__internal_a6a7e61fc05abb950f80e709c4b61b4e81bbc84945ba18ec3bd1a7a0c2649911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_7ba5f68d0aaf479b8085e439834956be475b7570852358c085320f50388f7fcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ba5f68d0aaf479b8085e439834956be475b7570852358c085320f50388f7fcc->enter($__internal_7ba5f68d0aaf479b8085e439834956be475b7570852358c085320f50388f7fcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_a6a7e61fc05abb950f80e709c4b61b4e81bbc84945ba18ec3bd1a7a0c2649911->leave($__internal_a6a7e61fc05abb950f80e709c4b61b4e81bbc84945ba18ec3bd1a7a0c2649911_prof);

        
        $__internal_7ba5f68d0aaf479b8085e439834956be475b7570852358c085320f50388f7fcc->leave($__internal_7ba5f68d0aaf479b8085e439834956be475b7570852358c085320f50388f7fcc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/nicolaescu/Workspace/Car-Rental/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
