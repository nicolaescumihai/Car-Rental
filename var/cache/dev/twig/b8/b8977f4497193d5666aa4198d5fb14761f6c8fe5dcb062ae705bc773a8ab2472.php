<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_5cf7f5f7a9341b476c5a26bb488adf88dc03032b6ca7df8b1378e7eeab7fa8b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eaaf796ff99a7d3497b1f92f8dee6cfb059bfdd0e8414d9ed6d0c1c146f16a7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaaf796ff99a7d3497b1f92f8dee6cfb059bfdd0e8414d9ed6d0c1c146f16a7f->enter($__internal_eaaf796ff99a7d3497b1f92f8dee6cfb059bfdd0e8414d9ed6d0c1c146f16a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_8b372b286523cec86dfeab39d444d1e15df0631197d65c542cf0c2d5d6806ad1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b372b286523cec86dfeab39d444d1e15df0631197d65c542cf0c2d5d6806ad1->enter($__internal_8b372b286523cec86dfeab39d444d1e15df0631197d65c542cf0c2d5d6806ad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eaaf796ff99a7d3497b1f92f8dee6cfb059bfdd0e8414d9ed6d0c1c146f16a7f->leave($__internal_eaaf796ff99a7d3497b1f92f8dee6cfb059bfdd0e8414d9ed6d0c1c146f16a7f_prof);

        
        $__internal_8b372b286523cec86dfeab39d444d1e15df0631197d65c542cf0c2d5d6806ad1->leave($__internal_8b372b286523cec86dfeab39d444d1e15df0631197d65c542cf0c2d5d6806ad1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fc8793f42f75c0f611d16bad19fdc13cff080fa139d51f9a61639523acaf581c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc8793f42f75c0f611d16bad19fdc13cff080fa139d51f9a61639523acaf581c->enter($__internal_fc8793f42f75c0f611d16bad19fdc13cff080fa139d51f9a61639523acaf581c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_90e08008375677dbc9704f708c7eb7e2f550347d9fde42c77521a35b701c244e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90e08008375677dbc9704f708c7eb7e2f550347d9fde42c77521a35b701c244e->enter($__internal_90e08008375677dbc9704f708c7eb7e2f550347d9fde42c77521a35b701c244e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_90e08008375677dbc9704f708c7eb7e2f550347d9fde42c77521a35b701c244e->leave($__internal_90e08008375677dbc9704f708c7eb7e2f550347d9fde42c77521a35b701c244e_prof);

        
        $__internal_fc8793f42f75c0f611d16bad19fdc13cff080fa139d51f9a61639523acaf581c->leave($__internal_fc8793f42f75c0f611d16bad19fdc13cff080fa139d51f9a61639523acaf581c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "/home/nicolaescu/Workspace/Car-Rental/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
