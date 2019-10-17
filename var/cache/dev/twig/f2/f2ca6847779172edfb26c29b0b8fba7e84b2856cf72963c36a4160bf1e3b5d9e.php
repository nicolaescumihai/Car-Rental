<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_df2985e665f57c0dcb1a2ffa69bcd522022a8239989c17d3a28cb242cf638a66 extends Twig_Template
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
        $__internal_612f1199d08cea76987a28efdce0491dec65ccf58a7b5fe0745571c1670e0cf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_612f1199d08cea76987a28efdce0491dec65ccf58a7b5fe0745571c1670e0cf6->enter($__internal_612f1199d08cea76987a28efdce0491dec65ccf58a7b5fe0745571c1670e0cf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_38eef415cc139bad13c1ea6f4697e597cd168b8a7c5ee10405ccd47144377cf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38eef415cc139bad13c1ea6f4697e597cd168b8a7c5ee10405ccd47144377cf5->enter($__internal_38eef415cc139bad13c1ea6f4697e597cd168b8a7c5ee10405ccd47144377cf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_612f1199d08cea76987a28efdce0491dec65ccf58a7b5fe0745571c1670e0cf6->leave($__internal_612f1199d08cea76987a28efdce0491dec65ccf58a7b5fe0745571c1670e0cf6_prof);

        
        $__internal_38eef415cc139bad13c1ea6f4697e597cd168b8a7c5ee10405ccd47144377cf5->leave($__internal_38eef415cc139bad13c1ea6f4697e597cd168b8a7c5ee10405ccd47144377cf5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/home/nicolaescu/Workspace/Car-Rental/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
