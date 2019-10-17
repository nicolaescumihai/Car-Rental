<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_7232aa0127231258a45701a039437d751c1b3c3b53036667e00f4b3232efbbb1 extends Twig_Template
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
        $__internal_da2ab7096605b53623cb933fc44cafce41eaec3f9eb2b19fee38dc7941809b76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da2ab7096605b53623cb933fc44cafce41eaec3f9eb2b19fee38dc7941809b76->enter($__internal_da2ab7096605b53623cb933fc44cafce41eaec3f9eb2b19fee38dc7941809b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_b1dd0e0bb22e20532dd2f62d033a27bb421605d39ace2e6e62ec21473f887825 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1dd0e0bb22e20532dd2f62d033a27bb421605d39ace2e6e62ec21473f887825->enter($__internal_b1dd0e0bb22e20532dd2f62d033a27bb421605d39ace2e6e62ec21473f887825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_da2ab7096605b53623cb933fc44cafce41eaec3f9eb2b19fee38dc7941809b76->leave($__internal_da2ab7096605b53623cb933fc44cafce41eaec3f9eb2b19fee38dc7941809b76_prof);

        
        $__internal_b1dd0e0bb22e20532dd2f62d033a27bb421605d39ace2e6e62ec21473f887825->leave($__internal_b1dd0e0bb22e20532dd2f62d033a27bb421605d39ace2e6e62ec21473f887825_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/nicolaescu/Workspace/Car-Rental/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
