<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_6623a99340359569162e169422a335c1046564ca971a4725af07e209bc3e3b00 extends Twig_Template
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
        $__internal_b6f24d53b325628d74e266eb449f33e65149271ac0ecf92a6ea62c80cd5a5207 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6f24d53b325628d74e266eb449f33e65149271ac0ecf92a6ea62c80cd5a5207->enter($__internal_b6f24d53b325628d74e266eb449f33e65149271ac0ecf92a6ea62c80cd5a5207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_d0e243774efed1d81114eef90486503b151a06e8c2a0868bb61d60e2d65e600d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0e243774efed1d81114eef90486503b151a06e8c2a0868bb61d60e2d65e600d->enter($__internal_d0e243774efed1d81114eef90486503b151a06e8c2a0868bb61d60e2d65e600d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_b6f24d53b325628d74e266eb449f33e65149271ac0ecf92a6ea62c80cd5a5207->leave($__internal_b6f24d53b325628d74e266eb449f33e65149271ac0ecf92a6ea62c80cd5a5207_prof);

        
        $__internal_d0e243774efed1d81114eef90486503b151a06e8c2a0868bb61d60e2d65e600d->leave($__internal_d0e243774efed1d81114eef90486503b151a06e8c2a0868bb61d60e2d65e600d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/nicolaescu/Workspace/Car-Rental/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
