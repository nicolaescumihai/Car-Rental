<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_b52889b5debdb1515c2a42998845fa2298d43f2dd288ded4f4221ce1d0c2d3e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aa54ba73d6ea000e269fd55d258f4c6a2df63fecfcbb94c56a528dbe8f716ffb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa54ba73d6ea000e269fd55d258f4c6a2df63fecfcbb94c56a528dbe8f716ffb->enter($__internal_aa54ba73d6ea000e269fd55d258f4c6a2df63fecfcbb94c56a528dbe8f716ffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_5837b78bf3e48c4e35753e0251adb18716cacfa70b0dfb581d3c5695efaadb10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5837b78bf3e48c4e35753e0251adb18716cacfa70b0dfb581d3c5695efaadb10->enter($__internal_5837b78bf3e48c4e35753e0251adb18716cacfa70b0dfb581d3c5695efaadb10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 22
        echo "
";
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('form_row', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('submit_row', $context, $blocks);
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('reset_row', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('checkbox_row', $context, $blocks);
        
        $__internal_aa54ba73d6ea000e269fd55d258f4c6a2df63fecfcbb94c56a528dbe8f716ffb->leave($__internal_aa54ba73d6ea000e269fd55d258f4c6a2df63fecfcbb94c56a528dbe8f716ffb_prof);

        
        $__internal_5837b78bf3e48c4e35753e0251adb18716cacfa70b0dfb581d3c5695efaadb10->leave($__internal_5837b78bf3e48c4e35753e0251adb18716cacfa70b0dfb581d3c5695efaadb10_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_c7a5e499d6649494ba0f093eeeac5474bcdd1bdf1e5a67b61453d29f6b7b4636 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7a5e499d6649494ba0f093eeeac5474bcdd1bdf1e5a67b61453d29f6b7b4636->enter($__internal_c7a5e499d6649494ba0f093eeeac5474bcdd1bdf1e5a67b61453d29f6b7b4636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_d25e420d665844a9dbb9c15143b64c0ce16324ed70168e26288c7d309d46d6b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d25e420d665844a9dbb9c15143b64c0ce16324ed70168e26288c7d309d46d6b9->enter($__internal_d25e420d665844a9dbb9c15143b64c0ce16324ed70168e26288c7d309d46d6b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_d25e420d665844a9dbb9c15143b64c0ce16324ed70168e26288c7d309d46d6b9->leave($__internal_d25e420d665844a9dbb9c15143b64c0ce16324ed70168e26288c7d309d46d6b9_prof);

        
        $__internal_c7a5e499d6649494ba0f093eeeac5474bcdd1bdf1e5a67b61453d29f6b7b4636->leave($__internal_c7a5e499d6649494ba0f093eeeac5474bcdd1bdf1e5a67b61453d29f6b7b4636_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_8d5419dc960e2c49df1cae50644fe4a15d80138d4faba9c1726c29134af449f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d5419dc960e2c49df1cae50644fe4a15d80138d4faba9c1726c29134af449f1->enter($__internal_8d5419dc960e2c49df1cae50644fe4a15d80138d4faba9c1726c29134af449f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_47d7c3a9ebd5c2b791daa0d187f7ccf06bd9c10e677bfc95e9ffd865ab6dce54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47d7c3a9ebd5c2b791daa0d187f7ccf06bd9c10e677bfc95e9ffd865ab6dce54->enter($__internal_47d7c3a9ebd5c2b791daa0d187f7ccf06bd9c10e677bfc95e9ffd865ab6dce54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        if ((($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 12
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 14
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 15
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        
        $__internal_47d7c3a9ebd5c2b791daa0d187f7ccf06bd9c10e677bfc95e9ffd865ab6dce54->leave($__internal_47d7c3a9ebd5c2b791daa0d187f7ccf06bd9c10e677bfc95e9ffd865ab6dce54_prof);

        
        $__internal_8d5419dc960e2c49df1cae50644fe4a15d80138d4faba9c1726c29134af449f1->leave($__internal_8d5419dc960e2c49df1cae50644fe4a15d80138d4faba9c1726c29134af449f1_prof);

    }

    // line 19
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_6d5041b451683340532b9a40a50f315ebe2970198c4651612378311faccfd9b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d5041b451683340532b9a40a50f315ebe2970198c4651612378311faccfd9b5->enter($__internal_6d5041b451683340532b9a40a50f315ebe2970198c4651612378311faccfd9b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_d69695b3f370dc127cf7214bcaacc1a4d9a90b7a86768047a26e110b2cd4c1d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d69695b3f370dc127cf7214bcaacc1a4d9a90b7a86768047a26e110b2cd4c1d3->enter($__internal_d69695b3f370dc127cf7214bcaacc1a4d9a90b7a86768047a26e110b2cd4c1d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 20
        echo "col-sm-2";
        
        $__internal_d69695b3f370dc127cf7214bcaacc1a4d9a90b7a86768047a26e110b2cd4c1d3->leave($__internal_d69695b3f370dc127cf7214bcaacc1a4d9a90b7a86768047a26e110b2cd4c1d3_prof);

        
        $__internal_6d5041b451683340532b9a40a50f315ebe2970198c4651612378311faccfd9b5->leave($__internal_6d5041b451683340532b9a40a50f315ebe2970198c4651612378311faccfd9b5_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_6ae53f73ebe9d23b59ed91e517ef66482cba5ade94abc32aee8ddae9e0373925 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ae53f73ebe9d23b59ed91e517ef66482cba5ade94abc32aee8ddae9e0373925->enter($__internal_6ae53f73ebe9d23b59ed91e517ef66482cba5ade94abc32aee8ddae9e0373925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_9f86ebe0ff2541f75443aaf8d82ee9b326a032a19aebcd22dac924ca6ec1c1f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f86ebe0ff2541f75443aaf8d82ee9b326a032a19aebcd22dac924ca6ec1c1f3->enter($__internal_9f86ebe0ff2541f75443aaf8d82ee9b326a032a19aebcd22dac924ca6ec1c1f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 26
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 28
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 31
        echo "</div>
";
        // line 32
        echo "</div>";
        
        $__internal_9f86ebe0ff2541f75443aaf8d82ee9b326a032a19aebcd22dac924ca6ec1c1f3->leave($__internal_9f86ebe0ff2541f75443aaf8d82ee9b326a032a19aebcd22dac924ca6ec1c1f3_prof);

        
        $__internal_6ae53f73ebe9d23b59ed91e517ef66482cba5ade94abc32aee8ddae9e0373925->leave($__internal_6ae53f73ebe9d23b59ed91e517ef66482cba5ade94abc32aee8ddae9e0373925_prof);

    }

    // line 35
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_9072a77c348d89d590328950ef1f00ca3e98ebbcc0acb483fe3c386650dc7ec5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9072a77c348d89d590328950ef1f00ca3e98ebbcc0acb483fe3c386650dc7ec5->enter($__internal_9072a77c348d89d590328950ef1f00ca3e98ebbcc0acb483fe3c386650dc7ec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_1a2dfed47c8b33966aee5981e99b159c9557f67b5258df08236800f37f65d1ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a2dfed47c8b33966aee5981e99b159c9557f67b5258df08236800f37f65d1ee->enter($__internal_1a2dfed47c8b33966aee5981e99b159c9557f67b5258df08236800f37f65d1ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 36
        echo "<div class=\"form-group\">";
        // line 37
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 38
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 40
        echo "</div>";
        // line 41
        echo "</div>";
        
        $__internal_1a2dfed47c8b33966aee5981e99b159c9557f67b5258df08236800f37f65d1ee->leave($__internal_1a2dfed47c8b33966aee5981e99b159c9557f67b5258df08236800f37f65d1ee_prof);

        
        $__internal_9072a77c348d89d590328950ef1f00ca3e98ebbcc0acb483fe3c386650dc7ec5->leave($__internal_9072a77c348d89d590328950ef1f00ca3e98ebbcc0acb483fe3c386650dc7ec5_prof);

    }

    // line 44
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_67631120e687fccb2b163db9eccb59dc025f19916901caf2a74b0e009daf3bd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67631120e687fccb2b163db9eccb59dc025f19916901caf2a74b0e009daf3bd7->enter($__internal_67631120e687fccb2b163db9eccb59dc025f19916901caf2a74b0e009daf3bd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_1083eb25119cb633200db8c1103bce3bbba547604b2f8d2529d8eb82cefebf32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1083eb25119cb633200db8c1103bce3bbba547604b2f8d2529d8eb82cefebf32->enter($__internal_1083eb25119cb633200db8c1103bce3bbba547604b2f8d2529d8eb82cefebf32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 45
        echo "<div class=\"form-group\">";
        // line 46
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 47
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 49
        echo "</div>";
        // line 50
        echo "</div>";
        
        $__internal_1083eb25119cb633200db8c1103bce3bbba547604b2f8d2529d8eb82cefebf32->leave($__internal_1083eb25119cb633200db8c1103bce3bbba547604b2f8d2529d8eb82cefebf32_prof);

        
        $__internal_67631120e687fccb2b163db9eccb59dc025f19916901caf2a74b0e009daf3bd7->leave($__internal_67631120e687fccb2b163db9eccb59dc025f19916901caf2a74b0e009daf3bd7_prof);

    }

    // line 53
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_74c644e19a4cebe1ad319f96ba873ea739b4440f0753e90196fb86ed3060b092 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74c644e19a4cebe1ad319f96ba873ea739b4440f0753e90196fb86ed3060b092->enter($__internal_74c644e19a4cebe1ad319f96ba873ea739b4440f0753e90196fb86ed3060b092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_c124c77b1e3a6741f815424d24a9d9dd0fde0ea94f2ad6f64f12fec35db01eb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c124c77b1e3a6741f815424d24a9d9dd0fde0ea94f2ad6f64f12fec35db01eb0->enter($__internal_c124c77b1e3a6741f815424d24a9d9dd0fde0ea94f2ad6f64f12fec35db01eb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 54
        echo "col-sm-10";
        
        $__internal_c124c77b1e3a6741f815424d24a9d9dd0fde0ea94f2ad6f64f12fec35db01eb0->leave($__internal_c124c77b1e3a6741f815424d24a9d9dd0fde0ea94f2ad6f64f12fec35db01eb0_prof);

        
        $__internal_74c644e19a4cebe1ad319f96ba873ea739b4440f0753e90196fb86ed3060b092->leave($__internal_74c644e19a4cebe1ad319f96ba873ea739b4440f0753e90196fb86ed3060b092_prof);

    }

    // line 57
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_cfbc4816c4d5ae273ae3a3f74eb07a01d135bd0adcd8dfe2c47d06a3710da1ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfbc4816c4d5ae273ae3a3f74eb07a01d135bd0adcd8dfe2c47d06a3710da1ce->enter($__internal_cfbc4816c4d5ae273ae3a3f74eb07a01d135bd0adcd8dfe2c47d06a3710da1ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_707c29e4a46573e05b0f2f37bb028a0836542c1b20e054fa53a63c40ca216a50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_707c29e4a46573e05b0f2f37bb028a0836542c1b20e054fa53a63c40ca216a50->enter($__internal_707c29e4a46573e05b0f2f37bb028a0836542c1b20e054fa53a63c40ca216a50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 58
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 59
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 60
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 63
        echo "</div>";
        // line 64
        echo "</div>";
        
        $__internal_707c29e4a46573e05b0f2f37bb028a0836542c1b20e054fa53a63c40ca216a50->leave($__internal_707c29e4a46573e05b0f2f37bb028a0836542c1b20e054fa53a63c40ca216a50_prof);

        
        $__internal_cfbc4816c4d5ae273ae3a3f74eb07a01d135bd0adcd8dfe2c47d06a3710da1ce->leave($__internal_cfbc4816c4d5ae273ae3a3f74eb07a01d135bd0adcd8dfe2c47d06a3710da1ce_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  320 => 64,  318 => 63,  316 => 62,  314 => 61,  310 => 60,  306 => 59,  300 => 58,  291 => 57,  281 => 54,  272 => 53,  262 => 50,  260 => 49,  258 => 48,  254 => 47,  250 => 46,  248 => 45,  239 => 44,  229 => 41,  227 => 40,  225 => 39,  221 => 38,  217 => 37,  215 => 36,  206 => 35,  196 => 32,  193 => 31,  191 => 30,  189 => 29,  185 => 28,  183 => 27,  177 => 26,  168 => 25,  158 => 20,  149 => 19,  138 => 15,  136 => 14,  131 => 12,  129 => 11,  120 => 10,  110 => 5,  108 => 4,  99 => 3,  89 => 57,  86 => 56,  84 => 53,  81 => 52,  79 => 44,  76 => 43,  74 => 35,  71 => 34,  69 => 25,  66 => 24,  63 => 22,  61 => 19,  58 => 18,  56 => 10,  53 => 9,  50 => 7,  48 => 3,  45 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
    {%- if label is same as(false) -%}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {%- else -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block submit_row -%}
    <div class=\"form-group\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock submit_row %}

{% block reset_row -%}
    <div class=\"form-group\">{#--#}
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
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>{#--#}
    </div>
{%- endblock checkbox_row %}", "bootstrap_3_horizontal_layout.html.twig", "/home/nicolaescu/Workspace/Car-Rental/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_horizontal_layout.html.twig");
    }
}
