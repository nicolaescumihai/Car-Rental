<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_6283d47a86865632be70566b8307b64fdaf3c273c836a8f358649b1b4294ec21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_499247ccde625f9876c3fed0aaff227e4d0c9e5e98233861f7cf473cdfad371b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_499247ccde625f9876c3fed0aaff227e4d0c9e5e98233861f7cf473cdfad371b->enter($__internal_499247ccde625f9876c3fed0aaff227e4d0c9e5e98233861f7cf473cdfad371b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_96c57aa03e065f1620477d2b1d30d0f2eec59310c276d27442719eb1eff9624b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96c57aa03e065f1620477d2b1d30d0f2eec59310c276d27442719eb1eff9624b->enter($__internal_96c57aa03e065f1620477d2b1d30d0f2eec59310c276d27442719eb1eff9624b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_499247ccde625f9876c3fed0aaff227e4d0c9e5e98233861f7cf473cdfad371b->leave($__internal_499247ccde625f9876c3fed0aaff227e4d0c9e5e98233861f7cf473cdfad371b_prof);

        
        $__internal_96c57aa03e065f1620477d2b1d30d0f2eec59310c276d27442719eb1eff9624b->leave($__internal_96c57aa03e065f1620477d2b1d30d0f2eec59310c276d27442719eb1eff9624b_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_bf277756ddf1325d76ea5a670801728fc63e2f504e60358df66d60cd29b90f66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf277756ddf1325d76ea5a670801728fc63e2f504e60358df66d60cd29b90f66->enter($__internal_bf277756ddf1325d76ea5a670801728fc63e2f504e60358df66d60cd29b90f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_1964f3da6f6e488b2bb7228a190b09195b3200e2f1615a097cd873d9e5b058c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1964f3da6f6e488b2bb7228a190b09195b3200e2f1615a097cd873d9e5b058c0->enter($__internal_1964f3da6f6e488b2bb7228a190b09195b3200e2f1615a097cd873d9e5b058c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_1964f3da6f6e488b2bb7228a190b09195b3200e2f1615a097cd873d9e5b058c0->leave($__internal_1964f3da6f6e488b2bb7228a190b09195b3200e2f1615a097cd873d9e5b058c0_prof);

        
        $__internal_bf277756ddf1325d76ea5a670801728fc63e2f504e60358df66d60cd29b90f66->leave($__internal_bf277756ddf1325d76ea5a670801728fc63e2f504e60358df66d60cd29b90f66_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e4feacf560ea4b579a91c3726a8b4e0b5da012eb553e20b704629344e65b9149 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4feacf560ea4b579a91c3726a8b4e0b5da012eb553e20b704629344e65b9149->enter($__internal_e4feacf560ea4b579a91c3726a8b4e0b5da012eb553e20b704629344e65b9149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4da13c11b4336e767e73eda1e8be2781724238ed7c1be2c705a3ab16149313e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4da13c11b4336e767e73eda1e8be2781724238ed7c1be2c705a3ab16149313e5->enter($__internal_4da13c11b4336e767e73eda1e8be2781724238ed7c1be2c705a3ab16149313e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_4da13c11b4336e767e73eda1e8be2781724238ed7c1be2c705a3ab16149313e5->leave($__internal_4da13c11b4336e767e73eda1e8be2781724238ed7c1be2c705a3ab16149313e5_prof);

        
        $__internal_e4feacf560ea4b579a91c3726a8b4e0b5da012eb553e20b704629344e65b9149->leave($__internal_e4feacf560ea4b579a91c3726a8b4e0b5da012eb553e20b704629344e65b9149_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
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

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/home/nicolaescu/Workspace/Car-Rental/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
