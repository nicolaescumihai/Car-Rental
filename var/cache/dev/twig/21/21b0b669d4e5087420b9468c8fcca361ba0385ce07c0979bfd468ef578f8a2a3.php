<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_c33a84d23129ca92a00f47eb3729442177fb5025d669e97645d841d4393e1b82 extends Twig_Template
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
        $__internal_f13e332c6a82a1d0715d3abe32b52db66f93a33e702ad14cb3e3935894ed848f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f13e332c6a82a1d0715d3abe32b52db66f93a33e702ad14cb3e3935894ed848f->enter($__internal_f13e332c6a82a1d0715d3abe32b52db66f93a33e702ad14cb3e3935894ed848f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_575dd9c85eff54d16efc2dcb9138d4a2460e9848b71a0d08453dc141197c392f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_575dd9c85eff54d16efc2dcb9138d4a2460e9848b71a0d08453dc141197c392f->enter($__internal_575dd9c85eff54d16efc2dcb9138d4a2460e9848b71a0d08453dc141197c392f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_f13e332c6a82a1d0715d3abe32b52db66f93a33e702ad14cb3e3935894ed848f->leave($__internal_f13e332c6a82a1d0715d3abe32b52db66f93a33e702ad14cb3e3935894ed848f_prof);

        
        $__internal_575dd9c85eff54d16efc2dcb9138d4a2460e9848b71a0d08453dc141197c392f->leave($__internal_575dd9c85eff54d16efc2dcb9138d4a2460e9848b71a0d08453dc141197c392f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/home/nicolaescu/Workspace/Car-Rental/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
