<?php

/* bootstrap_4_horizontal_layout.html.twig */
class __TwigTemplate_b95278dc29456adbf40314293151532a695f44576efc8c1f5eeaf3d005896cf1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_4_layout.html.twig", "bootstrap_4_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_4_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'fieldset_form_row' => array($this, 'block_fieldset_form_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_566dd3d54fec4a64cd2a72325d9a61c84a05f183740987e27ef36998262fe105 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_566dd3d54fec4a64cd2a72325d9a61c84a05f183740987e27ef36998262fe105->enter($__internal_566dd3d54fec4a64cd2a72325d9a61c84a05f183740987e27ef36998262fe105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        $__internal_8e2316b3828979965ddce8abc4b20b2f9dd42818851544497363b65fa3c49cf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e2316b3828979965ddce8abc4b20b2f9dd42818851544497363b65fa3c49cf3->enter($__internal_8e2316b3828979965ddce8abc4b20b2f9dd42818851544497363b65fa3c49cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_label', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 20
        echo "
";
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('fieldset_form_row', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('submit_row', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('reset_row', $context, $blocks);
        // line 66
        echo "
";
        // line 67
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 70
        echo "
";
        // line 71
        $this->displayBlock('checkbox_row', $context, $blocks);
        
        $__internal_566dd3d54fec4a64cd2a72325d9a61c84a05f183740987e27ef36998262fe105->leave($__internal_566dd3d54fec4a64cd2a72325d9a61c84a05f183740987e27ef36998262fe105_prof);

        
        $__internal_8e2316b3828979965ddce8abc4b20b2f9dd42818851544497363b65fa3c49cf3->leave($__internal_8e2316b3828979965ddce8abc4b20b2f9dd42818851544497363b65fa3c49cf3_prof);

    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_abcf2ff496461dc50ee1d29fa279704dccdc0813633d03a0c9d13650cfee12d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abcf2ff496461dc50ee1d29fa279704dccdc0813633d03a0c9d13650cfee12d3->enter($__internal_abcf2ff496461dc50ee1d29fa279704dccdc0813633d03a0c9d13650cfee12d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_a6e5cad1d39211caa0c7f540f2ccb586eb1dda6b2855bd56ee736967d240c9f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6e5cad1d39211caa0c7f540f2ccb586eb1dda6b2855bd56ee736967d240c9f7->enter($__internal_a6e5cad1d39211caa0c7f540f2ccb586eb1dda6b2855bd56ee736967d240c9f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 6
        if ((($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 7
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 9
            if (( !array_key_exists("expanded", $context) ||  !($context["expanded"] ?? $this->getContext($context, "expanded")))) {
                // line 10
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " col-form-label"))));
            }
            // line 12
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 13
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        
        $__internal_a6e5cad1d39211caa0c7f540f2ccb586eb1dda6b2855bd56ee736967d240c9f7->leave($__internal_a6e5cad1d39211caa0c7f540f2ccb586eb1dda6b2855bd56ee736967d240c9f7_prof);

        
        $__internal_abcf2ff496461dc50ee1d29fa279704dccdc0813633d03a0c9d13650cfee12d3->leave($__internal_abcf2ff496461dc50ee1d29fa279704dccdc0813633d03a0c9d13650cfee12d3_prof);

    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_83e96c27f753fa2d1d4e6bdc1eeaacc04f1f3951bb7f1f2e73e5520e766b277d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83e96c27f753fa2d1d4e6bdc1eeaacc04f1f3951bb7f1f2e73e5520e766b277d->enter($__internal_83e96c27f753fa2d1d4e6bdc1eeaacc04f1f3951bb7f1f2e73e5520e766b277d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_8d51c870174eb6321bac15fc326fa0516aca4ab209c5192ef88910e22a9a7ad9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d51c870174eb6321bac15fc326fa0516aca4ab209c5192ef88910e22a9a7ad9->enter($__internal_8d51c870174eb6321bac15fc326fa0516aca4ab209c5192ef88910e22a9a7ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 18
        echo "col-sm-2";
        
        $__internal_8d51c870174eb6321bac15fc326fa0516aca4ab209c5192ef88910e22a9a7ad9->leave($__internal_8d51c870174eb6321bac15fc326fa0516aca4ab209c5192ef88910e22a9a7ad9_prof);

        
        $__internal_83e96c27f753fa2d1d4e6bdc1eeaacc04f1f3951bb7f1f2e73e5520e766b277d->leave($__internal_83e96c27f753fa2d1d4e6bdc1eeaacc04f1f3951bb7f1f2e73e5520e766b277d_prof);

    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_876720fa7b521724efa37f031020dd5c88789df8e0f897382f85a5a0dede91b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_876720fa7b521724efa37f031020dd5c88789df8e0f897382f85a5a0dede91b1->enter($__internal_876720fa7b521724efa37f031020dd5c88789df8e0f897382f85a5a0dede91b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_d3e71cc973769eb0e6156255a8e589e905718beb06e218b8ea3bc1cdcd042e3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3e71cc973769eb0e6156255a8e589e905718beb06e218b8ea3bc1cdcd042e3e->enter($__internal_d3e71cc973769eb0e6156255a8e589e905718beb06e218b8ea3bc1cdcd042e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 24
        if ((array_key_exists("expanded", $context) && ($context["expanded"] ?? $this->getContext($context, "expanded")))) {
            // line 25
            $this->displayBlock("fieldset_form_row", $context, $blocks);
        } else {
            // line 27
            echo "<div class=\"form-group row";
            if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
                echo " is-invalid";
            }
            echo "\">";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
            // line 29
            echo "<div class=\"";
            $this->displayBlock("form_group_class", $context, $blocks);
            echo "\">";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 32
            echo "</div>
    ";
            // line 33
            echo "</div>";
        }
        
        $__internal_d3e71cc973769eb0e6156255a8e589e905718beb06e218b8ea3bc1cdcd042e3e->leave($__internal_d3e71cc973769eb0e6156255a8e589e905718beb06e218b8ea3bc1cdcd042e3e_prof);

        
        $__internal_876720fa7b521724efa37f031020dd5c88789df8e0f897382f85a5a0dede91b1->leave($__internal_876720fa7b521724efa37f031020dd5c88789df8e0f897382f85a5a0dede91b1_prof);

    }

    // line 37
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        $__internal_37c7b55aba4e5931be5f6e3c1faa9905fe8b1fa8bd317e203e636cc3811bead4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37c7b55aba4e5931be5f6e3c1faa9905fe8b1fa8bd317e203e636cc3811bead4->enter($__internal_37c7b55aba4e5931be5f6e3c1faa9905fe8b1fa8bd317e203e636cc3811bead4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        $__internal_59b7f839188b38620dac8d68b9d592f80761b944dc42d292b7b31bc060941284 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59b7f839188b38620dac8d68b9d592f80761b944dc42d292b7b31bc060941284->enter($__internal_59b7f839188b38620dac8d68b9d592f80761b944dc42d292b7b31bc060941284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        // line 38
        echo "<fieldset class=\"form-group\">
        <div class=\"row";
        // line 39
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " is-invalid";
        }
        echo "\">";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 41
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 44
        echo "</div>
        </div>
";
        // line 46
        echo "</fieldset>";
        
        $__internal_59b7f839188b38620dac8d68b9d592f80761b944dc42d292b7b31bc060941284->leave($__internal_59b7f839188b38620dac8d68b9d592f80761b944dc42d292b7b31bc060941284_prof);

        
        $__internal_37c7b55aba4e5931be5f6e3c1faa9905fe8b1fa8bd317e203e636cc3811bead4->leave($__internal_37c7b55aba4e5931be5f6e3c1faa9905fe8b1fa8bd317e203e636cc3811bead4_prof);

    }

    // line 49
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_b6480c712350bbeaf12c4be556f923087f13c2aa63c2ad32f23c1cf790c9062d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6480c712350bbeaf12c4be556f923087f13c2aa63c2ad32f23c1cf790c9062d->enter($__internal_b6480c712350bbeaf12c4be556f923087f13c2aa63c2ad32f23c1cf790c9062d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_7dd230f21fcb7c891d46548a83335cefd9f9e06dd2cab42bd92be5a8c483b008 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dd230f21fcb7c891d46548a83335cefd9f9e06dd2cab42bd92be5a8c483b008->enter($__internal_7dd230f21fcb7c891d46548a83335cefd9f9e06dd2cab42bd92be5a8c483b008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 50
        echo "<div class=\"form-group row\">";
        // line 51
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 52
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 54
        echo "</div>";
        // line 55
        echo "</div>";
        
        $__internal_7dd230f21fcb7c891d46548a83335cefd9f9e06dd2cab42bd92be5a8c483b008->leave($__internal_7dd230f21fcb7c891d46548a83335cefd9f9e06dd2cab42bd92be5a8c483b008_prof);

        
        $__internal_b6480c712350bbeaf12c4be556f923087f13c2aa63c2ad32f23c1cf790c9062d->leave($__internal_b6480c712350bbeaf12c4be556f923087f13c2aa63c2ad32f23c1cf790c9062d_prof);

    }

    // line 58
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_584855f6c9f3869760da504a4b7476a22ffcf89d1fbeb04822fafd4d3398904c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_584855f6c9f3869760da504a4b7476a22ffcf89d1fbeb04822fafd4d3398904c->enter($__internal_584855f6c9f3869760da504a4b7476a22ffcf89d1fbeb04822fafd4d3398904c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_977597680d600e5586f1e81c2f4a60d35e907fb607066e9d7a7c477e16590d12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_977597680d600e5586f1e81c2f4a60d35e907fb607066e9d7a7c477e16590d12->enter($__internal_977597680d600e5586f1e81c2f4a60d35e907fb607066e9d7a7c477e16590d12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 59
        echo "<div class=\"form-group row\">";
        // line 60
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 61
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 63
        echo "</div>";
        // line 64
        echo "</div>";
        
        $__internal_977597680d600e5586f1e81c2f4a60d35e907fb607066e9d7a7c477e16590d12->leave($__internal_977597680d600e5586f1e81c2f4a60d35e907fb607066e9d7a7c477e16590d12_prof);

        
        $__internal_584855f6c9f3869760da504a4b7476a22ffcf89d1fbeb04822fafd4d3398904c->leave($__internal_584855f6c9f3869760da504a4b7476a22ffcf89d1fbeb04822fafd4d3398904c_prof);

    }

    // line 67
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_87c2db2f179e66c6c8f2b5bd37a41dad9ae065c8577bd511d84b943d83e87c11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87c2db2f179e66c6c8f2b5bd37a41dad9ae065c8577bd511d84b943d83e87c11->enter($__internal_87c2db2f179e66c6c8f2b5bd37a41dad9ae065c8577bd511d84b943d83e87c11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_54b6284bc88d4633e768eb25d9728bb947cc7c52cb28b8debe0425b933b7be67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54b6284bc88d4633e768eb25d9728bb947cc7c52cb28b8debe0425b933b7be67->enter($__internal_54b6284bc88d4633e768eb25d9728bb947cc7c52cb28b8debe0425b933b7be67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 68
        echo "col-sm-10";
        
        $__internal_54b6284bc88d4633e768eb25d9728bb947cc7c52cb28b8debe0425b933b7be67->leave($__internal_54b6284bc88d4633e768eb25d9728bb947cc7c52cb28b8debe0425b933b7be67_prof);

        
        $__internal_87c2db2f179e66c6c8f2b5bd37a41dad9ae065c8577bd511d84b943d83e87c11->leave($__internal_87c2db2f179e66c6c8f2b5bd37a41dad9ae065c8577bd511d84b943d83e87c11_prof);

    }

    // line 71
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_8d10f9d5b530cec3a9449ce5155a7d5c70cdd53c0a7733b6e180b288c9253b9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d10f9d5b530cec3a9449ce5155a7d5c70cdd53c0a7733b6e180b288c9253b9d->enter($__internal_8d10f9d5b530cec3a9449ce5155a7d5c70cdd53c0a7733b6e180b288c9253b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_18d66eaca96a421b13d2e694dbed996613f27f202246e981cbbca063ad03e7e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18d66eaca96a421b13d2e694dbed996613f27f202246e981cbbca063ad03e7e8->enter($__internal_18d66eaca96a421b13d2e694dbed996613f27f202246e981cbbca063ad03e7e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 72
        echo "<div class=\"form-group row\">";
        // line 73
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 74
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 77
        echo "</div>";
        // line 78
        echo "</div>";
        
        $__internal_18d66eaca96a421b13d2e694dbed996613f27f202246e981cbbca063ad03e7e8->leave($__internal_18d66eaca96a421b13d2e694dbed996613f27f202246e981cbbca063ad03e7e8_prof);

        
        $__internal_8d10f9d5b530cec3a9449ce5155a7d5c70cdd53c0a7733b6e180b288c9253b9d->leave($__internal_8d10f9d5b530cec3a9449ce5155a7d5c70cdd53c0a7733b6e180b288c9253b9d_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_4_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  347 => 78,  345 => 77,  343 => 76,  341 => 75,  337 => 74,  333 => 73,  331 => 72,  322 => 71,  312 => 68,  303 => 67,  293 => 64,  291 => 63,  289 => 62,  285 => 61,  281 => 60,  279 => 59,  270 => 58,  260 => 55,  258 => 54,  256 => 53,  252 => 52,  248 => 51,  246 => 50,  237 => 49,  227 => 46,  223 => 44,  221 => 43,  219 => 42,  215 => 41,  213 => 40,  208 => 39,  205 => 38,  196 => 37,  185 => 33,  182 => 32,  180 => 31,  178 => 30,  174 => 29,  172 => 28,  166 => 27,  163 => 25,  161 => 24,  152 => 23,  142 => 18,  133 => 17,  122 => 13,  120 => 12,  117 => 10,  115 => 9,  110 => 7,  108 => 6,  99 => 5,  89 => 71,  86 => 70,  84 => 67,  81 => 66,  79 => 58,  76 => 57,  74 => 49,  71 => 48,  69 => 37,  66 => 36,  64 => 23,  61 => 22,  58 => 20,  56 => 17,  53 => 16,  51 => 5,  48 => 4,  45 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_4_layout.html.twig\" %}

{# Labels #}

{% block form_label -%}
    {%- if label is same as(false) -%}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {%- else -%}
        {%- if expanded is not defined or not expanded -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' col-form-label')|trim}) -%}
        {%- endif -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    {%- if expanded is defined and expanded -%}
        {{ block('fieldset_form_row') }}
    {%- else -%}
        <div class=\"form-group row{% if (not compound or force_error|default(false)) and not valid %} is-invalid{% endif %}\">
            {{- form_label(form) -}}
            <div class=\"{{ block('form_group_class') }}\">
                {{- form_widget(form) -}}
                {{- form_errors(form) -}}
            </div>
    {##}</div>
    {%- endif -%}
{%- endblock form_row %}

{% block fieldset_form_row -%}
    <fieldset class=\"form-group\">
        <div class=\"row{% if (not compound or force_error|default(false)) and not valid %} is-invalid{% endif %}\">
            {{- form_label(form) -}}
            <div class=\"{{ block('form_group_class') }}\">
                {{- form_widget(form) -}}
                {{- form_errors(form) -}}
            </div>
        </div>
{##}</fieldset>
{%- endblock fieldset_form_row %}

{% block submit_row -%}
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock submit_row %}

{% block reset_row -%}
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}

{% block checkbox_row -%}
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>{#--#}
    </div>
{%- endblock checkbox_row %}
", "bootstrap_4_horizontal_layout.html.twig", "/home/nicolaescu/Workspace/Car-Rental/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_4_horizontal_layout.html.twig");
    }
}
