<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_eec61a272b9bc03c699e43beb61876c1df42e789c37d7d01b00456c084edbc89 extends Twig_Template
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
        $__internal_34c04c9792bdfcb7962eb4d5756c8ce7475d99fc922163531ba361a0bbe84fb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34c04c9792bdfcb7962eb4d5756c8ce7475d99fc922163531ba361a0bbe84fb4->enter($__internal_34c04c9792bdfcb7962eb4d5756c8ce7475d99fc922163531ba361a0bbe84fb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_35fa841ba6f403bb1d55a41281057c154a7fb8a4e7432031ec3b46fe164fa6ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35fa841ba6f403bb1d55a41281057c154a7fb8a4e7432031ec3b46fe164fa6ba->enter($__internal_35fa841ba6f403bb1d55a41281057c154a7fb8a4e7432031ec3b46fe164fa6ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_34c04c9792bdfcb7962eb4d5756c8ce7475d99fc922163531ba361a0bbe84fb4->leave($__internal_34c04c9792bdfcb7962eb4d5756c8ce7475d99fc922163531ba361a0bbe84fb4_prof);

        
        $__internal_35fa841ba6f403bb1d55a41281057c154a7fb8a4e7432031ec3b46fe164fa6ba->leave($__internal_35fa841ba6f403bb1d55a41281057c154a7fb8a4e7432031ec3b46fe164fa6ba_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
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

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "FOSUserBundle:Profile:show_content.html.twig", "/home/nicolaescu/Workspace/Car-Rental/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show_content.html.twig");
    }
}
