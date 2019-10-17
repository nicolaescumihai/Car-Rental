<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_016a12e3c9f92e0eac60b8e55eeee419e7bf76b1b465d43b561ab80cb7a787b8 extends Twig_Template
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
        $__internal_fd614d19e469d06f2d9552958cde264680b8c9d55007e38620af8debf8a0ce65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd614d19e469d06f2d9552958cde264680b8c9d55007e38620af8debf8a0ce65->enter($__internal_fd614d19e469d06f2d9552958cde264680b8c9d55007e38620af8debf8a0ce65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_4b814017187125b28edaafedc6780e41e9ba0ef4ea5793685e9b57a81733a7cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b814017187125b28edaafedc6780e41e9ba0ef4ea5793685e9b57a81733a7cd->enter($__internal_4b814017187125b28edaafedc6780e41e9ba0ef4ea5793685e9b57a81733a7cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_fd614d19e469d06f2d9552958cde264680b8c9d55007e38620af8debf8a0ce65->leave($__internal_fd614d19e469d06f2d9552958cde264680b8c9d55007e38620af8debf8a0ce65_prof);

        
        $__internal_4b814017187125b28edaafedc6780e41e9ba0ef4ea5793685e9b57a81733a7cd->leave($__internal_4b814017187125b28edaafedc6780e41e9ba0ef4ea5793685e9b57a81733a7cd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/nicolaescu/Workspace/Car-Rental/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
