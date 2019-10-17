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
        $__internal_fea200633e4edf9233543c77b7a7d7a0a4d84bfa92a6c532501cec6591257d32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fea200633e4edf9233543c77b7a7d7a0a4d84bfa92a6c532501cec6591257d32->enter($__internal_fea200633e4edf9233543c77b7a7d7a0a4d84bfa92a6c532501cec6591257d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_e7637548a6726eb3fd666de40f4c93b0f334a7a9f9c9dd1a64b6f34e5d06bbb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7637548a6726eb3fd666de40f4c93b0f334a7a9f9c9dd1a64b6f34e5d06bbb1->enter($__internal_e7637548a6726eb3fd666de40f4c93b0f334a7a9f9c9dd1a64b6f34e5d06bbb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_fea200633e4edf9233543c77b7a7d7a0a4d84bfa92a6c532501cec6591257d32->leave($__internal_fea200633e4edf9233543c77b7a7d7a0a4d84bfa92a6c532501cec6591257d32_prof);

        
        $__internal_e7637548a6726eb3fd666de40f4c93b0f334a7a9f9c9dd1a64b6f34e5d06bbb1->leave($__internal_e7637548a6726eb3fd666de40f4c93b0f334a7a9f9c9dd1a64b6f34e5d06bbb1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d53d6eb5bb9bb2fc72841e1818973ba005656f179586544a10621086c981cd4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d53d6eb5bb9bb2fc72841e1818973ba005656f179586544a10621086c981cd4a->enter($__internal_d53d6eb5bb9bb2fc72841e1818973ba005656f179586544a10621086c981cd4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4e1f07e878405902c97796a064c89dc735780ad3eaef99509792b5afe24db31b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e1f07e878405902c97796a064c89dc735780ad3eaef99509792b5afe24db31b->enter($__internal_4e1f07e878405902c97796a064c89dc735780ad3eaef99509792b5afe24db31b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4e1f07e878405902c97796a064c89dc735780ad3eaef99509792b5afe24db31b->leave($__internal_4e1f07e878405902c97796a064c89dc735780ad3eaef99509792b5afe24db31b_prof);

        
        $__internal_d53d6eb5bb9bb2fc72841e1818973ba005656f179586544a10621086c981cd4a->leave($__internal_d53d6eb5bb9bb2fc72841e1818973ba005656f179586544a10621086c981cd4a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0d07cc7de874207dd21dcf3267ec863c1de5242bea8b089ec668fbc74eb567e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d07cc7de874207dd21dcf3267ec863c1de5242bea8b089ec668fbc74eb567e7->enter($__internal_0d07cc7de874207dd21dcf3267ec863c1de5242bea8b089ec668fbc74eb567e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_02bcd9d228e542d3cc77cf0a0824e06254279e69d24901a1bec6b8c7ce453418 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02bcd9d228e542d3cc77cf0a0824e06254279e69d24901a1bec6b8c7ce453418->enter($__internal_02bcd9d228e542d3cc77cf0a0824e06254279e69d24901a1bec6b8c7ce453418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_02bcd9d228e542d3cc77cf0a0824e06254279e69d24901a1bec6b8c7ce453418->leave($__internal_02bcd9d228e542d3cc77cf0a0824e06254279e69d24901a1bec6b8c7ce453418_prof);

        
        $__internal_0d07cc7de874207dd21dcf3267ec863c1de5242bea8b089ec668fbc74eb567e7->leave($__internal_0d07cc7de874207dd21dcf3267ec863c1de5242bea8b089ec668fbc74eb567e7_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_7540f74f982e2e89899214f9f5d813383a5c6526771d5f0710e410210a959fad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7540f74f982e2e89899214f9f5d813383a5c6526771d5f0710e410210a959fad->enter($__internal_7540f74f982e2e89899214f9f5d813383a5c6526771d5f0710e410210a959fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7e5c40674f819bb919ed7ba761c236a049c3a1310c8298b1c49ff115500fff39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e5c40674f819bb919ed7ba761c236a049c3a1310c8298b1c49ff115500fff39->enter($__internal_7e5c40674f819bb919ed7ba761c236a049c3a1310c8298b1c49ff115500fff39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7e5c40674f819bb919ed7ba761c236a049c3a1310c8298b1c49ff115500fff39->leave($__internal_7e5c40674f819bb919ed7ba761c236a049c3a1310c8298b1c49ff115500fff39_prof);

        
        $__internal_7540f74f982e2e89899214f9f5d813383a5c6526771d5f0710e410210a959fad->leave($__internal_7540f74f982e2e89899214f9f5d813383a5c6526771d5f0710e410210a959fad_prof);

    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_198bf406f67b11aedef1c419191f45d9439c84f6ec9dc2d79b2e9d368b893d8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_198bf406f67b11aedef1c419191f45d9439c84f6ec9dc2d79b2e9d368b893d8f->enter($__internal_198bf406f67b11aedef1c419191f45d9439c84f6ec9dc2d79b2e9d368b893d8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0ccbe4c2611b03f58b3abb7fa00ebee739dd8bd4b5b0a81b9bc0d233d3b1438f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ccbe4c2611b03f58b3abb7fa00ebee739dd8bd4b5b0a81b9bc0d233d3b1438f->enter($__internal_0ccbe4c2611b03f58b3abb7fa00ebee739dd8bd4b5b0a81b9bc0d233d3b1438f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0ccbe4c2611b03f58b3abb7fa00ebee739dd8bd4b5b0a81b9bc0d233d3b1438f->leave($__internal_0ccbe4c2611b03f58b3abb7fa00ebee739dd8bd4b5b0a81b9bc0d233d3b1438f_prof);

        
        $__internal_198bf406f67b11aedef1c419191f45d9439c84f6ec9dc2d79b2e9d368b893d8f->leave($__internal_198bf406f67b11aedef1c419191f45d9439c84f6ec9dc2d79b2e9d368b893d8f_prof);

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
", "base.html.twig", "/home/nicolaescu/Workspace/CarRental/app/Resources/views/base.html.twig");
    }
}
