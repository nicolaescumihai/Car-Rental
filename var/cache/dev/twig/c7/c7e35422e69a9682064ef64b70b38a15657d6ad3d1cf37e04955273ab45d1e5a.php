<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ee77b0566e02c08097cc0818e6e220f0438fc514ff5c2ae52342b3a8ccea3295 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5cce94a63b80b51b3e43ae72fffc077288cf147e98289661982bb5561a96b416 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cce94a63b80b51b3e43ae72fffc077288cf147e98289661982bb5561a96b416->enter($__internal_5cce94a63b80b51b3e43ae72fffc077288cf147e98289661982bb5561a96b416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_22ef87c4143e87c973aacdcda16be48adcdbfe9e7f527653cce521892ff6a14f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22ef87c4143e87c973aacdcda16be48adcdbfe9e7f527653cce521892ff6a14f->enter($__internal_22ef87c4143e87c973aacdcda16be48adcdbfe9e7f527653cce521892ff6a14f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5cce94a63b80b51b3e43ae72fffc077288cf147e98289661982bb5561a96b416->leave($__internal_5cce94a63b80b51b3e43ae72fffc077288cf147e98289661982bb5561a96b416_prof);

        
        $__internal_22ef87c4143e87c973aacdcda16be48adcdbfe9e7f527653cce521892ff6a14f->leave($__internal_22ef87c4143e87c973aacdcda16be48adcdbfe9e7f527653cce521892ff6a14f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4fbdfed35d6abedcb0a9f74f37d63d90f3286eeb72cc83fdc1dcfe916c405e2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fbdfed35d6abedcb0a9f74f37d63d90f3286eeb72cc83fdc1dcfe916c405e2d->enter($__internal_4fbdfed35d6abedcb0a9f74f37d63d90f3286eeb72cc83fdc1dcfe916c405e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_dcb7dbc891afa5e260e9e496ca448ba74c2d4559455975c4695ab23744e18ef8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcb7dbc891afa5e260e9e496ca448ba74c2d4559455975c4695ab23744e18ef8->enter($__internal_dcb7dbc891afa5e260e9e496ca448ba74c2d4559455975c4695ab23744e18ef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_dcb7dbc891afa5e260e9e496ca448ba74c2d4559455975c4695ab23744e18ef8->leave($__internal_dcb7dbc891afa5e260e9e496ca448ba74c2d4559455975c4695ab23744e18ef8_prof);

        
        $__internal_4fbdfed35d6abedcb0a9f74f37d63d90f3286eeb72cc83fdc1dcfe916c405e2d->leave($__internal_4fbdfed35d6abedcb0a9f74f37d63d90f3286eeb72cc83fdc1dcfe916c405e2d_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_be8a1d308fd600b710be20f7bacce8016b70f7a133d94fd87941aa660bad5841 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be8a1d308fd600b710be20f7bacce8016b70f7a133d94fd87941aa660bad5841->enter($__internal_be8a1d308fd600b710be20f7bacce8016b70f7a133d94fd87941aa660bad5841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_469af0255dce3b3fa59df53e5e21e48a158ac369372615bb54951ec50b5e2c36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_469af0255dce3b3fa59df53e5e21e48a158ac369372615bb54951ec50b5e2c36->enter($__internal_469af0255dce3b3fa59df53e5e21e48a158ac369372615bb54951ec50b5e2c36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_469af0255dce3b3fa59df53e5e21e48a158ac369372615bb54951ec50b5e2c36->leave($__internal_469af0255dce3b3fa59df53e5e21e48a158ac369372615bb54951ec50b5e2c36_prof);

        
        $__internal_be8a1d308fd600b710be20f7bacce8016b70f7a133d94fd87941aa660bad5841->leave($__internal_be8a1d308fd600b710be20f7bacce8016b70f7a133d94fd87941aa660bad5841_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_77ba1b2ba5c7c5770e29bbc0e677864279053aeb4556847b0609cc091cc93bca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77ba1b2ba5c7c5770e29bbc0e677864279053aeb4556847b0609cc091cc93bca->enter($__internal_77ba1b2ba5c7c5770e29bbc0e677864279053aeb4556847b0609cc091cc93bca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_753ebe05eaeb54a05e945febf8b388dfeb9e1d9e42900c6fd8c0842f765f22f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_753ebe05eaeb54a05e945febf8b388dfeb9e1d9e42900c6fd8c0842f765f22f2->enter($__internal_753ebe05eaeb54a05e945febf8b388dfeb9e1d9e42900c6fd8c0842f765f22f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_753ebe05eaeb54a05e945febf8b388dfeb9e1d9e42900c6fd8c0842f765f22f2->leave($__internal_753ebe05eaeb54a05e945febf8b388dfeb9e1d9e42900c6fd8c0842f765f22f2_prof);

        
        $__internal_77ba1b2ba5c7c5770e29bbc0e677864279053aeb4556847b0609cc091cc93bca->leave($__internal_77ba1b2ba5c7c5770e29bbc0e677864279053aeb4556847b0609cc091cc93bca_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/nicolaescu/Workspace/CarRental/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
