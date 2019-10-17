<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_7a56631aec9ecc9a55b7dfb35d6581121066a4fb4cae0634e626cb86147c0ba2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_25f277e527b29f4f08abd4ae9ee748507af555970487953f76c7127a89167112 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25f277e527b29f4f08abd4ae9ee748507af555970487953f76c7127a89167112->enter($__internal_25f277e527b29f4f08abd4ae9ee748507af555970487953f76c7127a89167112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_83676bba5c3e006a3c1a111fa4977cb354cec33ebe396544022a4c5916cc1bca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83676bba5c3e006a3c1a111fa4977cb354cec33ebe396544022a4c5916cc1bca->enter($__internal_83676bba5c3e006a3c1a111fa4977cb354cec33ebe396544022a4c5916cc1bca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25f277e527b29f4f08abd4ae9ee748507af555970487953f76c7127a89167112->leave($__internal_25f277e527b29f4f08abd4ae9ee748507af555970487953f76c7127a89167112_prof);

        
        $__internal_83676bba5c3e006a3c1a111fa4977cb354cec33ebe396544022a4c5916cc1bca->leave($__internal_83676bba5c3e006a3c1a111fa4977cb354cec33ebe396544022a4c5916cc1bca_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8214f9ae8645babcb5516998e92f32d9cfbdde9014f05482a655a0c79a2a3dc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8214f9ae8645babcb5516998e92f32d9cfbdde9014f05482a655a0c79a2a3dc8->enter($__internal_8214f9ae8645babcb5516998e92f32d9cfbdde9014f05482a655a0c79a2a3dc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ff804c0d7926dd6d6caf07ab73d01e71d473a250589cf35e8b6a59c84f431b7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff804c0d7926dd6d6caf07ab73d01e71d473a250589cf35e8b6a59c84f431b7d->enter($__internal_ff804c0d7926dd6d6caf07ab73d01e71d473a250589cf35e8b6a59c84f431b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_ff804c0d7926dd6d6caf07ab73d01e71d473a250589cf35e8b6a59c84f431b7d->leave($__internal_ff804c0d7926dd6d6caf07ab73d01e71d473a250589cf35e8b6a59c84f431b7d_prof);

        
        $__internal_8214f9ae8645babcb5516998e92f32d9cfbdde9014f05482a655a0c79a2a3dc8->leave($__internal_8214f9ae8645babcb5516998e92f32d9cfbdde9014f05482a655a0c79a2a3dc8_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_39544a80091b0af605dc78e76fe3bbbcbc8fe05086bbd49f553b350fd7bc9959 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39544a80091b0af605dc78e76fe3bbbcbc8fe05086bbd49f553b350fd7bc9959->enter($__internal_39544a80091b0af605dc78e76fe3bbbcbc8fe05086bbd49f553b350fd7bc9959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e0ce5e57c6f1f872e85db4a68f6363fda9ff7ced434d7ea6f492b21d657876d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0ce5e57c6f1f872e85db4a68f6363fda9ff7ced434d7ea6f492b21d657876d4->enter($__internal_e0ce5e57c6f1f872e85db4a68f6363fda9ff7ced434d7ea6f492b21d657876d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_e0ce5e57c6f1f872e85db4a68f6363fda9ff7ced434d7ea6f492b21d657876d4->leave($__internal_e0ce5e57c6f1f872e85db4a68f6363fda9ff7ced434d7ea6f492b21d657876d4_prof);

        
        $__internal_39544a80091b0af605dc78e76fe3bbbcbc8fe05086bbd49f553b350fd7bc9959->leave($__internal_39544a80091b0af605dc78e76fe3bbbcbc8fe05086bbd49f553b350fd7bc9959_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c68b33f1e2af810d82722eaff4dd33707df2270a6f8b3c1a7b2de9271d5808cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c68b33f1e2af810d82722eaff4dd33707df2270a6f8b3c1a7b2de9271d5808cd->enter($__internal_c68b33f1e2af810d82722eaff4dd33707df2270a6f8b3c1a7b2de9271d5808cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_094308f76ea590e7a62df338dbe5a8aafed819f12b2ee6d5c36a90c2a308c908 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_094308f76ea590e7a62df338dbe5a8aafed819f12b2ee6d5c36a90c2a308c908->enter($__internal_094308f76ea590e7a62df338dbe5a8aafed819f12b2ee6d5c36a90c2a308c908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_094308f76ea590e7a62df338dbe5a8aafed819f12b2ee6d5c36a90c2a308c908->leave($__internal_094308f76ea590e7a62df338dbe5a8aafed819f12b2ee6d5c36a90c2a308c908_prof);

        
        $__internal_c68b33f1e2af810d82722eaff4dd33707df2270a6f8b3c1a7b2de9271d5808cd->leave($__internal_c68b33f1e2af810d82722eaff4dd33707df2270a6f8b3c1a7b2de9271d5808cd_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/nicolaescu/Workspace/CarRental/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
