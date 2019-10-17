<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_1345bf6c5f8630149b2e5b4373af20d1721629ccc081cd9acb380d80d5e7ca06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9fd65451f439f3dc9f403e08281b5ea99a9c7604ff42f6d08e59499e4616d8b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fd65451f439f3dc9f403e08281b5ea99a9c7604ff42f6d08e59499e4616d8b3->enter($__internal_9fd65451f439f3dc9f403e08281b5ea99a9c7604ff42f6d08e59499e4616d8b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_40e1a965219344a7e4814effe6758a5d7242b6ac13deea745b909b9b6861507f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40e1a965219344a7e4814effe6758a5d7242b6ac13deea745b909b9b6861507f->enter($__internal_40e1a965219344a7e4814effe6758a5d7242b6ac13deea745b909b9b6861507f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_9fd65451f439f3dc9f403e08281b5ea99a9c7604ff42f6d08e59499e4616d8b3->leave($__internal_9fd65451f439f3dc9f403e08281b5ea99a9c7604ff42f6d08e59499e4616d8b3_prof);

        
        $__internal_40e1a965219344a7e4814effe6758a5d7242b6ac13deea745b909b9b6861507f->leave($__internal_40e1a965219344a7e4814effe6758a5d7242b6ac13deea745b909b9b6861507f_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_244a54604ee6df7cde3dcae031d4b44f307ef13d7b9b89360849ef5afa7bc23a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_244a54604ee6df7cde3dcae031d4b44f307ef13d7b9b89360849ef5afa7bc23a->enter($__internal_244a54604ee6df7cde3dcae031d4b44f307ef13d7b9b89360849ef5afa7bc23a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_12ef2c8d97d905f7fb596cdd0d95545b737ba02b9338de073a945ec914017d00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12ef2c8d97d905f7fb596cdd0d95545b737ba02b9338de073a945ec914017d00->enter($__internal_12ef2c8d97d905f7fb596cdd0d95545b737ba02b9338de073a945ec914017d00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_12ef2c8d97d905f7fb596cdd0d95545b737ba02b9338de073a945ec914017d00->leave($__internal_12ef2c8d97d905f7fb596cdd0d95545b737ba02b9338de073a945ec914017d00_prof);

        
        $__internal_244a54604ee6df7cde3dcae031d4b44f307ef13d7b9b89360849ef5afa7bc23a->leave($__internal_244a54604ee6df7cde3dcae031d4b44f307ef13d7b9b89360849ef5afa7bc23a_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a1f5fd60fdadf3f3e9d54015172b8c0437c4728bc5f87ca6e6fb179dd742c23c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1f5fd60fdadf3f3e9d54015172b8c0437c4728bc5f87ca6e6fb179dd742c23c->enter($__internal_a1f5fd60fdadf3f3e9d54015172b8c0437c4728bc5f87ca6e6fb179dd742c23c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_04c4053dcb5a2e6f6162e20200fced9a1d7fac1190aacbf830027ac6dd799f83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04c4053dcb5a2e6f6162e20200fced9a1d7fac1190aacbf830027ac6dd799f83->enter($__internal_04c4053dcb5a2e6f6162e20200fced9a1d7fac1190aacbf830027ac6dd799f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_04c4053dcb5a2e6f6162e20200fced9a1d7fac1190aacbf830027ac6dd799f83->leave($__internal_04c4053dcb5a2e6f6162e20200fced9a1d7fac1190aacbf830027ac6dd799f83_prof);

        
        $__internal_a1f5fd60fdadf3f3e9d54015172b8c0437c4728bc5f87ca6e6fb179dd742c23c->leave($__internal_a1f5fd60fdadf3f3e9d54015172b8c0437c4728bc5f87ca6e6fb179dd742c23c_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_803c211981c84faa9bafd5c5f032f19555020b3297858f36389fc9b39856cc85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_803c211981c84faa9bafd5c5f032f19555020b3297858f36389fc9b39856cc85->enter($__internal_803c211981c84faa9bafd5c5f032f19555020b3297858f36389fc9b39856cc85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_d754d6d1e501338fa33e769459506999bc21c8ed20deef0910d120e8a5b11520 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d754d6d1e501338fa33e769459506999bc21c8ed20deef0910d120e8a5b11520->enter($__internal_d754d6d1e501338fa33e769459506999bc21c8ed20deef0910d120e8a5b11520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_d754d6d1e501338fa33e769459506999bc21c8ed20deef0910d120e8a5b11520->leave($__internal_d754d6d1e501338fa33e769459506999bc21c8ed20deef0910d120e8a5b11520_prof);

        
        $__internal_803c211981c84faa9bafd5c5f032f19555020b3297858f36389fc9b39856cc85->leave($__internal_803c211981c84faa9bafd5c5f032f19555020b3297858f36389fc9b39856cc85_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/home/nicolaescu/Workspace/Car-Rental/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
