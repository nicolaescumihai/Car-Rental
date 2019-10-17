<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_0fc4e85aa22e7e60c3d2d6a107bc6fd64b50bc5e0437886a3c5a1b023fbcf4e2 extends Twig_Template
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
        $__internal_4a7481ee6c6f7f5f5273a398da2a5599768d880623d073f8187fc6e74d85c6c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a7481ee6c6f7f5f5273a398da2a5599768d880623d073f8187fc6e74d85c6c9->enter($__internal_4a7481ee6c6f7f5f5273a398da2a5599768d880623d073f8187fc6e74d85c6c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_9b82de3acff1606c0ed07af9376d7b5339d2ce4fd414a23c5bf11765de4ee482 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b82de3acff1606c0ed07af9376d7b5339d2ce4fd414a23c5bf11765de4ee482->enter($__internal_9b82de3acff1606c0ed07af9376d7b5339d2ce4fd414a23c5bf11765de4ee482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_4a7481ee6c6f7f5f5273a398da2a5599768d880623d073f8187fc6e74d85c6c9->leave($__internal_4a7481ee6c6f7f5f5273a398da2a5599768d880623d073f8187fc6e74d85c6c9_prof);

        
        $__internal_9b82de3acff1606c0ed07af9376d7b5339d2ce4fd414a23c5bf11765de4ee482->leave($__internal_9b82de3acff1606c0ed07af9376d7b5339d2ce4fd414a23c5bf11765de4ee482_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_2d3cd63453a6678a922571ebfe3c2eec08015e8057576a9f40ca96ce4085bc83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d3cd63453a6678a922571ebfe3c2eec08015e8057576a9f40ca96ce4085bc83->enter($__internal_2d3cd63453a6678a922571ebfe3c2eec08015e8057576a9f40ca96ce4085bc83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_757a30aa210e3901bd233b3282321786be5a9b2ea4186bde240a23a9a94d5df7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_757a30aa210e3901bd233b3282321786be5a9b2ea4186bde240a23a9a94d5df7->enter($__internal_757a30aa210e3901bd233b3282321786be5a9b2ea4186bde240a23a9a94d5df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_757a30aa210e3901bd233b3282321786be5a9b2ea4186bde240a23a9a94d5df7->leave($__internal_757a30aa210e3901bd233b3282321786be5a9b2ea4186bde240a23a9a94d5df7_prof);

        
        $__internal_2d3cd63453a6678a922571ebfe3c2eec08015e8057576a9f40ca96ce4085bc83->leave($__internal_2d3cd63453a6678a922571ebfe3c2eec08015e8057576a9f40ca96ce4085bc83_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_677ec411117897d5e15151589ce6e0584e158e0ae36f49ae433dfedf511f68a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_677ec411117897d5e15151589ce6e0584e158e0ae36f49ae433dfedf511f68a6->enter($__internal_677ec411117897d5e15151589ce6e0584e158e0ae36f49ae433dfedf511f68a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_c8530229031a1dde8407b97bbd403f0e3ce86eaf685b8c46246e1899f3b36fdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8530229031a1dde8407b97bbd403f0e3ce86eaf685b8c46246e1899f3b36fdb->enter($__internal_c8530229031a1dde8407b97bbd403f0e3ce86eaf685b8c46246e1899f3b36fdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_c8530229031a1dde8407b97bbd403f0e3ce86eaf685b8c46246e1899f3b36fdb->leave($__internal_c8530229031a1dde8407b97bbd403f0e3ce86eaf685b8c46246e1899f3b36fdb_prof);

        
        $__internal_677ec411117897d5e15151589ce6e0584e158e0ae36f49ae433dfedf511f68a6->leave($__internal_677ec411117897d5e15151589ce6e0584e158e0ae36f49ae433dfedf511f68a6_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_bf7e24b7a1ac7a3fab1e0dfe9a9694e3bf7660345b09fd70dff5344a7212dab4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf7e24b7a1ac7a3fab1e0dfe9a9694e3bf7660345b09fd70dff5344a7212dab4->enter($__internal_bf7e24b7a1ac7a3fab1e0dfe9a9694e3bf7660345b09fd70dff5344a7212dab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_6f21e42834b44f47b5c566de657d3ad277e753d025cfe547538a4f226e2656e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f21e42834b44f47b5c566de657d3ad277e753d025cfe547538a4f226e2656e0->enter($__internal_6f21e42834b44f47b5c566de657d3ad277e753d025cfe547538a4f226e2656e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_6f21e42834b44f47b5c566de657d3ad277e753d025cfe547538a4f226e2656e0->leave($__internal_6f21e42834b44f47b5c566de657d3ad277e753d025cfe547538a4f226e2656e0_prof);

        
        $__internal_bf7e24b7a1ac7a3fab1e0dfe9a9694e3bf7660345b09fd70dff5344a7212dab4->leave($__internal_bf7e24b7a1ac7a3fab1e0dfe9a9694e3bf7660345b09fd70dff5344a7212dab4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/home/nicolaescu/Workspace/Car-Rental/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
