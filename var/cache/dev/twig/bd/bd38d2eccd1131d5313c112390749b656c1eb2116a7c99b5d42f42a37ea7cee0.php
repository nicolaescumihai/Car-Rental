<?php

/* form_table_layout.html.twig */
class __TwigTemplate_99e69a41f664ead503bce8b4b2fa92cd218c44a97dd163eee9301a28c0b42d26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9e3bed902ad74374489b1b182e646e0908eacaeb540a8ba6db2c0e3036ee14a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e3bed902ad74374489b1b182e646e0908eacaeb540a8ba6db2c0e3036ee14a1->enter($__internal_9e3bed902ad74374489b1b182e646e0908eacaeb540a8ba6db2c0e3036ee14a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_4fd581c0c7ad9cbd21b8ea479f91050fa5791def0cda74b84fde8a6e0a7df9ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fd581c0c7ad9cbd21b8ea479f91050fa5791def0cda74b84fde8a6e0a7df9ec->enter($__internal_4fd581c0c7ad9cbd21b8ea479f91050fa5791def0cda74b84fde8a6e0a7df9ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_9e3bed902ad74374489b1b182e646e0908eacaeb540a8ba6db2c0e3036ee14a1->leave($__internal_9e3bed902ad74374489b1b182e646e0908eacaeb540a8ba6db2c0e3036ee14a1_prof);

        
        $__internal_4fd581c0c7ad9cbd21b8ea479f91050fa5791def0cda74b84fde8a6e0a7df9ec->leave($__internal_4fd581c0c7ad9cbd21b8ea479f91050fa5791def0cda74b84fde8a6e0a7df9ec_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_0c05c3d3f58063b8e3aecbce928176d0d4e84a88547d4c500d490e660cc36c27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c05c3d3f58063b8e3aecbce928176d0d4e84a88547d4c500d490e660cc36c27->enter($__internal_0c05c3d3f58063b8e3aecbce928176d0d4e84a88547d4c500d490e660cc36c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_f0dcbe4e79161d051275ea3ec0a4558004310ca5f218fa5ef0c2d955d34a61e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0dcbe4e79161d051275ea3ec0a4558004310ca5f218fa5ef0c2d955d34a61e7->enter($__internal_f0dcbe4e79161d051275ea3ec0a4558004310ca5f218fa5ef0c2d955d34a61e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_f0dcbe4e79161d051275ea3ec0a4558004310ca5f218fa5ef0c2d955d34a61e7->leave($__internal_f0dcbe4e79161d051275ea3ec0a4558004310ca5f218fa5ef0c2d955d34a61e7_prof);

        
        $__internal_0c05c3d3f58063b8e3aecbce928176d0d4e84a88547d4c500d490e660cc36c27->leave($__internal_0c05c3d3f58063b8e3aecbce928176d0d4e84a88547d4c500d490e660cc36c27_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_1a3b0d228600432951519f6b7a6312d772d64516cdcab0dc7539e515d1fb50f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a3b0d228600432951519f6b7a6312d772d64516cdcab0dc7539e515d1fb50f4->enter($__internal_1a3b0d228600432951519f6b7a6312d772d64516cdcab0dc7539e515d1fb50f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_9edbf5259dbcfd07d94187e4165b18095785add7f777a2c724b2689f0cb574be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9edbf5259dbcfd07d94187e4165b18095785add7f777a2c724b2689f0cb574be->enter($__internal_9edbf5259dbcfd07d94187e4165b18095785add7f777a2c724b2689f0cb574be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_9edbf5259dbcfd07d94187e4165b18095785add7f777a2c724b2689f0cb574be->leave($__internal_9edbf5259dbcfd07d94187e4165b18095785add7f777a2c724b2689f0cb574be_prof);

        
        $__internal_1a3b0d228600432951519f6b7a6312d772d64516cdcab0dc7539e515d1fb50f4->leave($__internal_1a3b0d228600432951519f6b7a6312d772d64516cdcab0dc7539e515d1fb50f4_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_d87079c6cadd8f9e4b18b6609011ed06a2ed76fabbb5a147ace386b891ccf79a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d87079c6cadd8f9e4b18b6609011ed06a2ed76fabbb5a147ace386b891ccf79a->enter($__internal_d87079c6cadd8f9e4b18b6609011ed06a2ed76fabbb5a147ace386b891ccf79a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_26b9dc01a10d4f24ce208e77f96c62caea914f99b98211975ea132f2d7840575 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26b9dc01a10d4f24ce208e77f96c62caea914f99b98211975ea132f2d7840575->enter($__internal_26b9dc01a10d4f24ce208e77f96c62caea914f99b98211975ea132f2d7840575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_26b9dc01a10d4f24ce208e77f96c62caea914f99b98211975ea132f2d7840575->leave($__internal_26b9dc01a10d4f24ce208e77f96c62caea914f99b98211975ea132f2d7840575_prof);

        
        $__internal_d87079c6cadd8f9e4b18b6609011ed06a2ed76fabbb5a147ace386b891ccf79a->leave($__internal_d87079c6cadd8f9e4b18b6609011ed06a2ed76fabbb5a147ace386b891ccf79a_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_088c2464399a060d1084d4b41d504e7c66a2669e96f4db7e62c163f0c73b01e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_088c2464399a060d1084d4b41d504e7c66a2669e96f4db7e62c163f0c73b01e2->enter($__internal_088c2464399a060d1084d4b41d504e7c66a2669e96f4db7e62c163f0c73b01e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_3b144909db25846023bd767fa8d033035598fb6348d027dafe8d639135b701d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b144909db25846023bd767fa8d033035598fb6348d027dafe8d639135b701d9->enter($__internal_3b144909db25846023bd767fa8d033035598fb6348d027dafe8d639135b701d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((twig_test_empty($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) && (twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_3b144909db25846023bd767fa8d033035598fb6348d027dafe8d639135b701d9->leave($__internal_3b144909db25846023bd767fa8d033035598fb6348d027dafe8d639135b701d9_prof);

        
        $__internal_088c2464399a060d1084d4b41d504e7c66a2669e96f4db7e62c163f0c73b01e2->leave($__internal_088c2464399a060d1084d4b41d504e7c66a2669e96f4db7e62c163f0c73b01e2_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form.parent is empty and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "/home/nicolaescu/Workspace/Car-Rental/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/form_table_layout.html.twig");
    }
}
