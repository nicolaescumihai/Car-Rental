<?php

/* @App/Admin/show_all_users.html.twig */
class __TwigTemplate_690f493ef66fe78aac9c68896ab1ba99b970de7d2846a91fc61ce9021d43c903 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@App/Admin/show_all_users.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ade9c7ea5d47ab7e9e768aa6427eeddbbbf0694d240b2738eed8c30e38d29cc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ade9c7ea5d47ab7e9e768aa6427eeddbbbf0694d240b2738eed8c30e38d29cc1->enter($__internal_ade9c7ea5d47ab7e9e768aa6427eeddbbbf0694d240b2738eed8c30e38d29cc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Admin/show_all_users.html.twig"));

        $__internal_af3394ee89c951b01f2f43efb7d28a21566db89a821644678aba702f68eb2015 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af3394ee89c951b01f2f43efb7d28a21566db89a821644678aba702f68eb2015->enter($__internal_af3394ee89c951b01f2f43efb7d28a21566db89a821644678aba702f68eb2015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Admin/show_all_users.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ade9c7ea5d47ab7e9e768aa6427eeddbbbf0694d240b2738eed8c30e38d29cc1->leave($__internal_ade9c7ea5d47ab7e9e768aa6427eeddbbbf0694d240b2738eed8c30e38d29cc1_prof);

        
        $__internal_af3394ee89c951b01f2f43efb7d28a21566db89a821644678aba702f68eb2015->leave($__internal_af3394ee89c951b01f2f43efb7d28a21566db89a821644678aba702f68eb2015_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_e08d2dd722c11a9c9a999c3ff8a258347d82b0be3393a14b506721515b3c128a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e08d2dd722c11a9c9a999c3ff8a258347d82b0be3393a14b506721515b3c128a->enter($__internal_e08d2dd722c11a9c9a999c3ff8a258347d82b0be3393a14b506721515b3c128a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c30327c657962c2a71f151cd07ac549c093cdd1788e0144b3db8cd7d5aec5646 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c30327c657962c2a71f151cd07ac549c093cdd1788e0144b3db8cd7d5aec5646->enter($__internal_c30327c657962c2a71f151cd07ac549c093cdd1788e0144b3db8cd7d5aec5646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<h1>All Users</h1>
";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 5
            echo "    <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_c30327c657962c2a71f151cd07ac549c093cdd1788e0144b3db8cd7d5aec5646->leave($__internal_c30327c657962c2a71f151cd07ac549c093cdd1788e0144b3db8cd7d5aec5646_prof);

        
        $__internal_e08d2dd722c11a9c9a999c3ff8a258347d82b0be3393a14b506721515b3c128a->leave($__internal_e08d2dd722c11a9c9a999c3ff8a258347d82b0be3393a14b506721515b3c128a_prof);

    }

    public function getTemplateName()
    {
        return "@App/Admin/show_all_users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 5,  52 => 4,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
<h1>All Users</h1>
{% for user in users %}
    <li>{{ user.username }}</li>
{% endfor %}
{% endblock %}", "@App/Admin/show_all_users.html.twig", "/home/nicolaescu/Workspace/Car-Rental/src/AppBundle/Resources/views/Admin/show_all_users.html.twig");
    }
}
