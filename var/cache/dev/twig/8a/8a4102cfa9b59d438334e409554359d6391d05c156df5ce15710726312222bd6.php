<?php

/* :user:index.html.twig */
class __TwigTemplate_f0fed693a8ef0450655d9b726d85761a47c1f4440e64b29a69ae10fa60b5632f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:index.html.twig", 1);
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
        $__internal_346bf40e0db67c504a6f98fc5b7e45bb1c9bd51dd458e5014ab6d3003680c18a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_346bf40e0db67c504a6f98fc5b7e45bb1c9bd51dd458e5014ab6d3003680c18a->enter($__internal_346bf40e0db67c504a6f98fc5b7e45bb1c9bd51dd458e5014ab6d3003680c18a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:index.html.twig"));

        $__internal_f49db773c279859a2be27519f851f47652bb25f50acd67549ab15805ca711c1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f49db773c279859a2be27519f851f47652bb25f50acd67549ab15805ca711c1e->enter($__internal_f49db773c279859a2be27519f851f47652bb25f50acd67549ab15805ca711c1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_346bf40e0db67c504a6f98fc5b7e45bb1c9bd51dd458e5014ab6d3003680c18a->leave($__internal_346bf40e0db67c504a6f98fc5b7e45bb1c9bd51dd458e5014ab6d3003680c18a_prof);

        
        $__internal_f49db773c279859a2be27519f851f47652bb25f50acd67549ab15805ca711c1e->leave($__internal_f49db773c279859a2be27519f851f47652bb25f50acd67549ab15805ca711c1e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f696a1ec86104da400f6c6bb8bff06e484809e6dedbb513aa412900150723e79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f696a1ec86104da400f6c6bb8bff06e484809e6dedbb513aa412900150723e79->enter($__internal_f696a1ec86104da400f6c6bb8bff06e484809e6dedbb513aa412900150723e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a05203e8b5102af5c2b0ef9100fbe1e625c7c41532d2226d10fdfe99bb514b37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a05203e8b5102af5c2b0ef9100fbe1e625c7c41532d2226d10fdfe99bb514b37->enter($__internal_a05203e8b5102af5c2b0ef9100fbe1e625c7c41532d2226d10fdfe99bb514b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Users list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Email</th>
                <th>Password</th>
                <th>Roll</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "password", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "roll", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_new");
        echo "\">Create a new user</a>
        </li>
    </ul>
";
        
        $__internal_a05203e8b5102af5c2b0ef9100fbe1e625c7c41532d2226d10fdfe99bb514b37->leave($__internal_a05203e8b5102af5c2b0ef9100fbe1e625c7c41532d2226d10fdfe99bb514b37_prof);

        
        $__internal_f696a1ec86104da400f6c6bb8bff06e484809e6dedbb513aa412900150723e79->leave($__internal_f696a1ec86104da400f6c6bb8bff06e484809e6dedbb513aa412900150723e79_prof);

    }

    public function getTemplateName()
    {
        return ":user:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 40,  110 => 35,  98 => 29,  92 => 26,  85 => 22,  81 => 21,  77 => 20,  71 => 19,  68 => 18,  64 => 17,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Users list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Email</th>
                <th>Password</th>
                <th>Roll</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for user in users %}
            <tr>
                <td><a href=\"{{ path('user_show', { 'id': user.id }) }}\">{{ user.id }}</a></td>
                <td>{{ user.email }}</td>
                <td>{{ user.password }}</td>
                <td>{{ user.roll }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('user_show', { 'id': user.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('user_edit', { 'id': user.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('user_new') }}\">Create a new user</a>
        </li>
    </ul>
{% endblock %}
", ":user:index.html.twig", "/home/nicolaescu/Workspace/Car-Rental/app/Resources/views/user/index.html.twig");
    }
}
