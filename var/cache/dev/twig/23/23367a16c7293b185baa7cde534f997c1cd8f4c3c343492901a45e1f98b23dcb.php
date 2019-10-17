<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_825ca2aa137a9515ebe275341b175c9009faae5483283b9a68051a94da6769f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_76fb7ba03b170a251d83a73ca5c4cbdaedc831fd6e2fe0efb7038d49424c9d7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76fb7ba03b170a251d83a73ca5c4cbdaedc831fd6e2fe0efb7038d49424c9d7e->enter($__internal_76fb7ba03b170a251d83a73ca5c4cbdaedc831fd6e2fe0efb7038d49424c9d7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_6b5ae1276e87590de0e962a2aa962703d3229b5fcc5b7e934a42039ab58e2430 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b5ae1276e87590de0e962a2aa962703d3229b5fcc5b7e934a42039ab58e2430->enter($__internal_6b5ae1276e87590de0e962a2aa962703d3229b5fcc5b7e934a42039ab58e2430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_76fb7ba03b170a251d83a73ca5c4cbdaedc831fd6e2fe0efb7038d49424c9d7e->leave($__internal_76fb7ba03b170a251d83a73ca5c4cbdaedc831fd6e2fe0efb7038d49424c9d7e_prof);

        
        $__internal_6b5ae1276e87590de0e962a2aa962703d3229b5fcc5b7e934a42039ab58e2430->leave($__internal_6b5ae1276e87590de0e962a2aa962703d3229b5fcc5b7e934a42039ab58e2430_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_dd2a7083872bcb3d1a78044e609c085f50701b0bd560cf7666eb5dea6816dcb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd2a7083872bcb3d1a78044e609c085f50701b0bd560cf7666eb5dea6816dcb6->enter($__internal_dd2a7083872bcb3d1a78044e609c085f50701b0bd560cf7666eb5dea6816dcb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ed3bea23eaf4d1093df04813d432e5c9859ed495a3bec6e271f3a95dca6b6b0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed3bea23eaf4d1093df04813d432e5c9859ed495a3bec6e271f3a95dca6b6b0d->enter($__internal_ed3bea23eaf4d1093df04813d432e5c9859ed495a3bec6e271f3a95dca6b6b0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_ed3bea23eaf4d1093df04813d432e5c9859ed495a3bec6e271f3a95dca6b6b0d->leave($__internal_ed3bea23eaf4d1093df04813d432e5c9859ed495a3bec6e271f3a95dca6b6b0d_prof);

        
        $__internal_dd2a7083872bcb3d1a78044e609c085f50701b0bd560cf7666eb5dea6816dcb6->leave($__internal_dd2a7083872bcb3d1a78044e609c085f50701b0bd560cf7666eb5dea6816dcb6_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_3ad97d5b475e4706d39c0db3f00bd75a45ae390a794bd1df35d7dbad2bb53d74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ad97d5b475e4706d39c0db3f00bd75a45ae390a794bd1df35d7dbad2bb53d74->enter($__internal_3ad97d5b475e4706d39c0db3f00bd75a45ae390a794bd1df35d7dbad2bb53d74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f7d6195b6733a96108bda7e423052cb9d67478e559e59f30898df872567d3d29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7d6195b6733a96108bda7e423052cb9d67478e559e59f30898df872567d3d29->enter($__internal_f7d6195b6733a96108bda7e423052cb9d67478e559e59f30898df872567d3d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_f7d6195b6733a96108bda7e423052cb9d67478e559e59f30898df872567d3d29->leave($__internal_f7d6195b6733a96108bda7e423052cb9d67478e559e59f30898df872567d3d29_prof);

        
        $__internal_3ad97d5b475e4706d39c0db3f00bd75a45ae390a794bd1df35d7dbad2bb53d74->leave($__internal_3ad97d5b475e4706d39c0db3f00bd75a45ae390a794bd1df35d7dbad2bb53d74_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c7fea50eeb36fbf311db33e30df36c2a20970376557da6a8ee587d5ada7382d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c7fea50eeb36fbf311db33e30df36c2a20970376557da6a8ee587d5ada7382d->enter($__internal_9c7fea50eeb36fbf311db33e30df36c2a20970376557da6a8ee587d5ada7382d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ccab29937495bc8b427b97a3ac15ff84a0e0cc18ad73f20e73d016f647fd9ef3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccab29937495bc8b427b97a3ac15ff84a0e0cc18ad73f20e73d016f647fd9ef3->enter($__internal_ccab29937495bc8b427b97a3ac15ff84a0e0cc18ad73f20e73d016f647fd9ef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ccab29937495bc8b427b97a3ac15ff84a0e0cc18ad73f20e73d016f647fd9ef3->leave($__internal_ccab29937495bc8b427b97a3ac15ff84a0e0cc18ad73f20e73d016f647fd9ef3_prof);

        
        $__internal_9c7fea50eeb36fbf311db33e30df36c2a20970376557da6a8ee587d5ada7382d->leave($__internal_9c7fea50eeb36fbf311db33e30df36c2a20970376557da6a8ee587d5ada7382d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/nicolaescu/Workspace/CarRental/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
