<?php

/* base.html.twig */
class __TwigTemplate_559e907860c46520099dcbde370f6353b32f541dcfcac85bea6c45c73c49bfbf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_916d355e04db81fc063556f5224bf9fbc992581f3e81d8dc6b789af11bdaad8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_916d355e04db81fc063556f5224bf9fbc992581f3e81d8dc6b789af11bdaad8f->enter($__internal_916d355e04db81fc063556f5224bf9fbc992581f3e81d8dc6b789af11bdaad8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_5a5ed11403b6c8823f0122511268c09d38e24c5b29529b05c802a18ef4e5e8c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a5ed11403b6c8823f0122511268c09d38e24c5b29529b05c802a18ef4e5e8c6->enter($__internal_5a5ed11403b6c8823f0122511268c09d38e24c5b29529b05c802a18ef4e5e8c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>

        <nav class=\"navbar navbar-expand-lg navbar-light\" style=\"background-color: deepskyblue;\">
            <a class=\"navbar-brand\" href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Home</a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor03\" aria-controls=\"navbarColor03\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>

            <div class=\"collapse navbar-collapse\" id=\"navbarColor03\">
                <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\">Login</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">Register</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\">Logout</a>
                </ul>
                <form class=\"form-inline\">
                    <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\" />
                    <button class=\"btn btn-outline-primary my-2 my-sm-0\" type=\"submit\">Search</button>
                </form>
            </div>
        </nav>
    </head>
    <body>
        ";
        // line 36
        $this->displayBlock('body', $context, $blocks);
        // line 37
        echo "

        ";
        // line 39
        $this->displayBlock('javascripts', $context, $blocks);
        // line 40
        echo "    </body>
</html>
";
        
        $__internal_916d355e04db81fc063556f5224bf9fbc992581f3e81d8dc6b789af11bdaad8f->leave($__internal_916d355e04db81fc063556f5224bf9fbc992581f3e81d8dc6b789af11bdaad8f_prof);

        
        $__internal_5a5ed11403b6c8823f0122511268c09d38e24c5b29529b05c802a18ef4e5e8c6->leave($__internal_5a5ed11403b6c8823f0122511268c09d38e24c5b29529b05c802a18ef4e5e8c6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b8f6793fb50f4850ee4233abbb8e4351a1bf027e50d97643170306195214d239 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8f6793fb50f4850ee4233abbb8e4351a1bf027e50d97643170306195214d239->enter($__internal_b8f6793fb50f4850ee4233abbb8e4351a1bf027e50d97643170306195214d239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8e8f3ead2b958c2d385d72d7f9e37eb13814eff4dd2b66d2159af6d358f07be7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e8f3ead2b958c2d385d72d7f9e37eb13814eff4dd2b66d2159af6d358f07be7->enter($__internal_8e8f3ead2b958c2d385d72d7f9e37eb13814eff4dd2b66d2159af6d358f07be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8e8f3ead2b958c2d385d72d7f9e37eb13814eff4dd2b66d2159af6d358f07be7->leave($__internal_8e8f3ead2b958c2d385d72d7f9e37eb13814eff4dd2b66d2159af6d358f07be7_prof);

        
        $__internal_b8f6793fb50f4850ee4233abbb8e4351a1bf027e50d97643170306195214d239->leave($__internal_b8f6793fb50f4850ee4233abbb8e4351a1bf027e50d97643170306195214d239_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5603a0937533cee9587cc74ead6c33eb1ca69f9e90ef58a69e3d8523e2214565 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5603a0937533cee9587cc74ead6c33eb1ca69f9e90ef58a69e3d8523e2214565->enter($__internal_5603a0937533cee9587cc74ead6c33eb1ca69f9e90ef58a69e3d8523e2214565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_276e69d84dae6f98979c75960dc1619115530ac7a13f5e776c5e28d71aeb06c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_276e69d84dae6f98979c75960dc1619115530ac7a13f5e776c5e28d71aeb06c2->enter($__internal_276e69d84dae6f98979c75960dc1619115530ac7a13f5e776c5e28d71aeb06c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_276e69d84dae6f98979c75960dc1619115530ac7a13f5e776c5e28d71aeb06c2->leave($__internal_276e69d84dae6f98979c75960dc1619115530ac7a13f5e776c5e28d71aeb06c2_prof);

        
        $__internal_5603a0937533cee9587cc74ead6c33eb1ca69f9e90ef58a69e3d8523e2214565->leave($__internal_5603a0937533cee9587cc74ead6c33eb1ca69f9e90ef58a69e3d8523e2214565_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_86ec8a5bb9423d40b3cc7dc9a7388842e680bdeedf65fbd67391f9d42050ce3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86ec8a5bb9423d40b3cc7dc9a7388842e680bdeedf65fbd67391f9d42050ce3f->enter($__internal_86ec8a5bb9423d40b3cc7dc9a7388842e680bdeedf65fbd67391f9d42050ce3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_20f15f9ecc2d0569352564de16170e30180613cd9847ebd388c4bcd0470209ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20f15f9ecc2d0569352564de16170e30180613cd9847ebd388c4bcd0470209ad->enter($__internal_20f15f9ecc2d0569352564de16170e30180613cd9847ebd388c4bcd0470209ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_20f15f9ecc2d0569352564de16170e30180613cd9847ebd388c4bcd0470209ad->leave($__internal_20f15f9ecc2d0569352564de16170e30180613cd9847ebd388c4bcd0470209ad_prof);

        
        $__internal_86ec8a5bb9423d40b3cc7dc9a7388842e680bdeedf65fbd67391f9d42050ce3f->leave($__internal_86ec8a5bb9423d40b3cc7dc9a7388842e680bdeedf65fbd67391f9d42050ce3f_prof);

    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f753e7d4c072391385783ab16e3625704f1a1916823eb3f70a279b35e238fe12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f753e7d4c072391385783ab16e3625704f1a1916823eb3f70a279b35e238fe12->enter($__internal_f753e7d4c072391385783ab16e3625704f1a1916823eb3f70a279b35e238fe12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5f8b10fddd4fa8a09f49c5fe0d4495aabcfa70ef7a3c0809e330ff768cdff5c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f8b10fddd4fa8a09f49c5fe0d4495aabcfa70ef7a3c0809e330ff768cdff5c4->enter($__internal_5f8b10fddd4fa8a09f49c5fe0d4495aabcfa70ef7a3c0809e330ff768cdff5c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5f8b10fddd4fa8a09f49c5fe0d4495aabcfa70ef7a3c0809e330ff768cdff5c4->leave($__internal_5f8b10fddd4fa8a09f49c5fe0d4495aabcfa70ef7a3c0809e330ff768cdff5c4_prof);

        
        $__internal_f753e7d4c072391385783ab16e3625704f1a1916823eb3f70a279b35e238fe12->leave($__internal_f753e7d4c072391385783ab16e3625704f1a1916823eb3f70a279b35e238fe12_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 39,  141 => 36,  124 => 6,  106 => 5,  94 => 40,  92 => 39,  88 => 37,  86 => 36,  73 => 26,  67 => 23,  61 => 20,  50 => 12,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>

        <nav class=\"navbar navbar-expand-lg navbar-light\" style=\"background-color: deepskyblue;\">
            <a class=\"navbar-brand\" href=\"{{ path('homepage') }}\">Home</a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor03\" aria-controls=\"navbarColor03\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>

            <div class=\"collapse navbar-collapse\" id=\"navbarColor03\">
                <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"{{ path('fos_user_security_login') }}\">Login</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('fos_user_registration_register') }}\">Register</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('fos_user_security_logout') }}\">Logout</a>
                </ul>
                <form class=\"form-inline\">
                    <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\" />
                    <button class=\"btn btn-outline-primary my-2 my-sm-0\" type=\"submit\">Search</button>
                </form>
            </div>
        </nav>
    </head>
    <body>
        {% block body %}{% endblock %}


        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/nicolaescu/Workspace/Car-Rental/app/Resources/views/base.html.twig");
    }
}
