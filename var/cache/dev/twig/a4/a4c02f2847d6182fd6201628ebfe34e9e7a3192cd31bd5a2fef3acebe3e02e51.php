<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_c85d01da95cbb29d68856fc0ac5782006ca9d8ab605cec70da1db440934505e3 extends Twig_Template
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
        $__internal_9cf963067289d83952a359b72f363aeef99f1fbbff67cb576f4304786b81bf6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cf963067289d83952a359b72f363aeef99f1fbbff67cb576f4304786b81bf6e->enter($__internal_9cf963067289d83952a359b72f363aeef99f1fbbff67cb576f4304786b81bf6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_a1d1d64f6a16ea2b1a60d88a79cf14891eaf7f4f03ebbbc3cd78a31fb8f582c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1d1d64f6a16ea2b1a60d88a79cf14891eaf7f4f03ebbbc3cd78a31fb8f582c8->enter($__internal_a1d1d64f6a16ea2b1a60d88a79cf14891eaf7f4f03ebbbc3cd78a31fb8f582c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["group"] ?? $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_9cf963067289d83952a359b72f363aeef99f1fbbff67cb576f4304786b81bf6e->leave($__internal_9cf963067289d83952a359b72f363aeef99f1fbbff67cb576f4304786b81bf6e_prof);

        
        $__internal_a1d1d64f6a16ea2b1a60d88a79cf14891eaf7f4f03ebbbc3cd78a31fb8f582c8->leave($__internal_a1d1d64f6a16ea2b1a60d88a79cf14891eaf7f4f03ebbbc3cd78a31fb8f582c8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
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

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "/home/nicolaescu/Workspace/Car-Rental/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show_content.html.twig");
    }
}
