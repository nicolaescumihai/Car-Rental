<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_10a91966ef3a49bce0ccaa17483429c3e6aa8e126befe2e5779e8d33bdfeb460 extends Twig_Template
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
        $__internal_a93fc3d9098e3ca4b5cb5fdb163428aa87447d08a39cdafc8404cd7387148ae7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a93fc3d9098e3ca4b5cb5fdb163428aa87447d08a39cdafc8404cd7387148ae7->enter($__internal_a93fc3d9098e3ca4b5cb5fdb163428aa87447d08a39cdafc8404cd7387148ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_881be643631ba19b948aed8a958504161a48c0cc132f4a356627f84281ef1003 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_881be643631ba19b948aed8a958504161a48c0cc132f4a356627f84281ef1003->enter($__internal_881be643631ba19b948aed8a958504161a48c0cc132f4a356627f84281ef1003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_a93fc3d9098e3ca4b5cb5fdb163428aa87447d08a39cdafc8404cd7387148ae7->leave($__internal_a93fc3d9098e3ca4b5cb5fdb163428aa87447d08a39cdafc8404cd7387148ae7_prof);

        
        $__internal_881be643631ba19b948aed8a958504161a48c0cc132f4a356627f84281ef1003->leave($__internal_881be643631ba19b948aed8a958504161a48c0cc132f4a356627f84281ef1003_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/nicolaescu/Workspace/Car-Rental/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
