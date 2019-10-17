<?php

/* TwigBundle::layout.html.twig */
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
        $__internal_b77d8a856d101a1ce89ed0b3aad3f1ab9bb1dbb57ab3f17908c2e6550170d044 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b77d8a856d101a1ce89ed0b3aad3f1ab9bb1dbb57ab3f17908c2e6550170d044->enter($__internal_b77d8a856d101a1ce89ed0b3aad3f1ab9bb1dbb57ab3f17908c2e6550170d044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_bf38ff85f370e8a04af01b2ab48e437d4647d3569017d70e6f1d6333d98acdfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf38ff85f370e8a04af01b2ab48e437d4647d3569017d70e6f1d6333d98acdfe->enter($__internal_bf38ff85f370e8a04af01b2ab48e437d4647d3569017d70e6f1d6333d98acdfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_b77d8a856d101a1ce89ed0b3aad3f1ab9bb1dbb57ab3f17908c2e6550170d044->leave($__internal_b77d8a856d101a1ce89ed0b3aad3f1ab9bb1dbb57ab3f17908c2e6550170d044_prof);

        
        $__internal_bf38ff85f370e8a04af01b2ab48e437d4647d3569017d70e6f1d6333d98acdfe->leave($__internal_bf38ff85f370e8a04af01b2ab48e437d4647d3569017d70e6f1d6333d98acdfe_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_74ed7f6e30abc58631592c7e1ea0ad096c0a77cda50a4f25c0b349e912e69cc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74ed7f6e30abc58631592c7e1ea0ad096c0a77cda50a4f25c0b349e912e69cc8->enter($__internal_74ed7f6e30abc58631592c7e1ea0ad096c0a77cda50a4f25c0b349e912e69cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9c65ed7c1fc9941ca4a5f0ab37ab517f8217903f256c3df8e3a2055d2caeffe9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c65ed7c1fc9941ca4a5f0ab37ab517f8217903f256c3df8e3a2055d2caeffe9->enter($__internal_9c65ed7c1fc9941ca4a5f0ab37ab517f8217903f256c3df8e3a2055d2caeffe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_9c65ed7c1fc9941ca4a5f0ab37ab517f8217903f256c3df8e3a2055d2caeffe9->leave($__internal_9c65ed7c1fc9941ca4a5f0ab37ab517f8217903f256c3df8e3a2055d2caeffe9_prof);

        
        $__internal_74ed7f6e30abc58631592c7e1ea0ad096c0a77cda50a4f25c0b349e912e69cc8->leave($__internal_74ed7f6e30abc58631592c7e1ea0ad096c0a77cda50a4f25c0b349e912e69cc8_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_3affb6138df8685efa45073bfd1656d2d8240b98a23ede8ee05d8a4130d293dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3affb6138df8685efa45073bfd1656d2d8240b98a23ede8ee05d8a4130d293dc->enter($__internal_3affb6138df8685efa45073bfd1656d2d8240b98a23ede8ee05d8a4130d293dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f7ce780c9196163b3071b09982301ebe201ff621d66809a4bfe65f2af3da1b89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7ce780c9196163b3071b09982301ebe201ff621d66809a4bfe65f2af3da1b89->enter($__internal_f7ce780c9196163b3071b09982301ebe201ff621d66809a4bfe65f2af3da1b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_f7ce780c9196163b3071b09982301ebe201ff621d66809a4bfe65f2af3da1b89->leave($__internal_f7ce780c9196163b3071b09982301ebe201ff621d66809a4bfe65f2af3da1b89_prof);

        
        $__internal_3affb6138df8685efa45073bfd1656d2d8240b98a23ede8ee05d8a4130d293dc->leave($__internal_3affb6138df8685efa45073bfd1656d2d8240b98a23ede8ee05d8a4130d293dc_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_02db7feb9dbc63be70ffe2499d33fdd7ef57097a963e9f20fcb2e488f2c701ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02db7feb9dbc63be70ffe2499d33fdd7ef57097a963e9f20fcb2e488f2c701ff->enter($__internal_02db7feb9dbc63be70ffe2499d33fdd7ef57097a963e9f20fcb2e488f2c701ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0c3cca376728a863098c674bbe36ae232c554eb9653a7e885ed1157b713f4938 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c3cca376728a863098c674bbe36ae232c554eb9653a7e885ed1157b713f4938->enter($__internal_0c3cca376728a863098c674bbe36ae232c554eb9653a7e885ed1157b713f4938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0c3cca376728a863098c674bbe36ae232c554eb9653a7e885ed1157b713f4938->leave($__internal_0c3cca376728a863098c674bbe36ae232c554eb9653a7e885ed1157b713f4938_prof);

        
        $__internal_02db7feb9dbc63be70ffe2499d33fdd7ef57097a963e9f20fcb2e488f2c701ff->leave($__internal_02db7feb9dbc63be70ffe2499d33fdd7ef57097a963e9f20fcb2e488f2c701ff_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
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
", "TwigBundle::layout.html.twig", "/home/nicolaescu/Workspace/Car-Rental/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
