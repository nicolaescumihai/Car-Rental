<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_ee77b0566e02c08097cc0818e6e220f0438fc514ff5c2ae52342b3a8ccea3295 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_d18e9328c79496c8f03cfa9641f12f3164b6984cacf14d61c816563b543af905 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d18e9328c79496c8f03cfa9641f12f3164b6984cacf14d61c816563b543af905->enter($__internal_d18e9328c79496c8f03cfa9641f12f3164b6984cacf14d61c816563b543af905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_040a7bf19dd594d9de4017601eb43821f8f08647fa0f2731dee51cd591d590ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_040a7bf19dd594d9de4017601eb43821f8f08647fa0f2731dee51cd591d590ad->enter($__internal_040a7bf19dd594d9de4017601eb43821f8f08647fa0f2731dee51cd591d590ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d18e9328c79496c8f03cfa9641f12f3164b6984cacf14d61c816563b543af905->leave($__internal_d18e9328c79496c8f03cfa9641f12f3164b6984cacf14d61c816563b543af905_prof);

        
        $__internal_040a7bf19dd594d9de4017601eb43821f8f08647fa0f2731dee51cd591d590ad->leave($__internal_040a7bf19dd594d9de4017601eb43821f8f08647fa0f2731dee51cd591d590ad_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_74aacc68fe283513c69c639739488b9815b27743f39ddc8aa52da0d11463401f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74aacc68fe283513c69c639739488b9815b27743f39ddc8aa52da0d11463401f->enter($__internal_74aacc68fe283513c69c639739488b9815b27743f39ddc8aa52da0d11463401f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_16cd8887bc3b2d2e094a321143d32368d14ebb37b73691f67c0bcec5bc6622e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16cd8887bc3b2d2e094a321143d32368d14ebb37b73691f67c0bcec5bc6622e8->enter($__internal_16cd8887bc3b2d2e094a321143d32368d14ebb37b73691f67c0bcec5bc6622e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_16cd8887bc3b2d2e094a321143d32368d14ebb37b73691f67c0bcec5bc6622e8->leave($__internal_16cd8887bc3b2d2e094a321143d32368d14ebb37b73691f67c0bcec5bc6622e8_prof);

        
        $__internal_74aacc68fe283513c69c639739488b9815b27743f39ddc8aa52da0d11463401f->leave($__internal_74aacc68fe283513c69c639739488b9815b27743f39ddc8aa52da0d11463401f_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_f8c94a1b7692ac714db237bc79bf30270887d39d94f6635db73027e4222defb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8c94a1b7692ac714db237bc79bf30270887d39d94f6635db73027e4222defb0->enter($__internal_f8c94a1b7692ac714db237bc79bf30270887d39d94f6635db73027e4222defb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_10cdf6b21e7b88b1643b1edecec378a3d750b2a004b88c79965c7597b9f42640 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10cdf6b21e7b88b1643b1edecec378a3d750b2a004b88c79965c7597b9f42640->enter($__internal_10cdf6b21e7b88b1643b1edecec378a3d750b2a004b88c79965c7597b9f42640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_10cdf6b21e7b88b1643b1edecec378a3d750b2a004b88c79965c7597b9f42640->leave($__internal_10cdf6b21e7b88b1643b1edecec378a3d750b2a004b88c79965c7597b9f42640_prof);

        
        $__internal_f8c94a1b7692ac714db237bc79bf30270887d39d94f6635db73027e4222defb0->leave($__internal_f8c94a1b7692ac714db237bc79bf30270887d39d94f6635db73027e4222defb0_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_c725341100ee8d6d06dadd2fe24be8d77b5e5b6257a6d4999f1303a73b32d71c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c725341100ee8d6d06dadd2fe24be8d77b5e5b6257a6d4999f1303a73b32d71c->enter($__internal_c725341100ee8d6d06dadd2fe24be8d77b5e5b6257a6d4999f1303a73b32d71c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_be5c714007773a473d22c41e7a5da7b98b50a533d38ba1352f812921a3599261 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be5c714007773a473d22c41e7a5da7b98b50a533d38ba1352f812921a3599261->enter($__internal_be5c714007773a473d22c41e7a5da7b98b50a533d38ba1352f812921a3599261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_be5c714007773a473d22c41e7a5da7b98b50a533d38ba1352f812921a3599261->leave($__internal_be5c714007773a473d22c41e7a5da7b98b50a533d38ba1352f812921a3599261_prof);

        
        $__internal_c725341100ee8d6d06dadd2fe24be8d77b5e5b6257a6d4999f1303a73b32d71c->leave($__internal_c725341100ee8d6d06dadd2fe24be8d77b5e5b6257a6d4999f1303a73b32d71c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "/home/nicolaescu/Workspace/Car-Rental/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
