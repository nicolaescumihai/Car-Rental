<?php

/* bootstrap_4_layout.html.twig */
class __TwigTemplate_e683d18d4f6b33c09b6ce8f3d31e03757ee29ee8ad7e50045a65e00d6bbcb275 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_base_layout.html.twig", "bootstrap_4_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'money_widget' => array($this, 'block_money_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'widget_attributes' => array($this, 'block_widget_attributes'),
                'button_widget' => array($this, 'block_button_widget'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'form_label' => array($this, 'block_form_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0fdc1ae708e95d397c9837d5f4e7a41d3a91f65503d31ecfad17e3498c670ecc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fdc1ae708e95d397c9837d5f4e7a41d3a91f65503d31ecfad17e3498c670ecc->enter($__internal_0fdc1ae708e95d397c9837d5f4e7a41d3a91f65503d31ecfad17e3498c670ecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_layout.html.twig"));

        $__internal_62c0957a67d7159c93697a61faddd47ce8f4fcac7200be83fd91c55b186257a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62c0957a67d7159c93697a61faddd47ce8f4fcac7200be83fd91c55b186257a5->enter($__internal_62c0957a67d7159c93697a61faddd47ce8f4fcac7200be83fd91c55b186257a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('money_widget', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('date_widget', $context, $blocks);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('time_widget', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 60
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 67
        $this->displayBlock('button_widget', $context, $blocks);
        // line 71
        echo "
";
        // line 72
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 83
        echo "
";
        // line 84
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 95
        echo "
";
        // line 96
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 120
        echo "
";
        // line 122
        echo "
";
        // line 123
        $this->displayBlock('form_label', $context, $blocks);
        // line 132
        echo "
";
        // line 133
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 158
        echo "
";
        // line 160
        echo "
";
        // line 161
        $this->displayBlock('form_row', $context, $blocks);
        // line 171
        echo "
";
        // line 173
        echo "
";
        // line 174
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_0fdc1ae708e95d397c9837d5f4e7a41d3a91f65503d31ecfad17e3498c670ecc->leave($__internal_0fdc1ae708e95d397c9837d5f4e7a41d3a91f65503d31ecfad17e3498c670ecc_prof);

        
        $__internal_62c0957a67d7159c93697a61faddd47ce8f4fcac7200be83fd91c55b186257a5->leave($__internal_62c0957a67d7159c93697a61faddd47ce8f4fcac7200be83fd91c55b186257a5_prof);

    }

    // line 5
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_fff0046cf6b047f49316afe032b84edec72d0859f5631dd2ae33f993a8dcde63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fff0046cf6b047f49316afe032b84edec72d0859f5631dd2ae33f993a8dcde63->enter($__internal_fff0046cf6b047f49316afe032b84edec72d0859f5631dd2ae33f993a8dcde63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_895bd3ff9fa40ec52d5d5d189e84b53e03976254a9787921fe3bbae02e71a41d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_895bd3ff9fa40ec52d5d5d189e84b53e03976254a9787921fe3bbae02e71a41d->enter($__internal_895bd3ff9fa40ec52d5d5d189e84b53e03976254a9787921fe3bbae02e71a41d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 6
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            // line 7
            echo "        ";
            $context["group_class"] = " form-control is-invalid";
            // line 8
            echo "        ";
            $context["valid"] = true;
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("money_widget", $context, $blocks);
        
        $__internal_895bd3ff9fa40ec52d5d5d189e84b53e03976254a9787921fe3bbae02e71a41d->leave($__internal_895bd3ff9fa40ec52d5d5d189e84b53e03976254a9787921fe3bbae02e71a41d_prof);

        
        $__internal_fff0046cf6b047f49316afe032b84edec72d0859f5631dd2ae33f993a8dcde63->leave($__internal_fff0046cf6b047f49316afe032b84edec72d0859f5631dd2ae33f993a8dcde63_prof);

    }

    // line 13
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_f858e9051fbcca841710b1f6c57accde765dcd79bc25d04d7ceb8789ebfcce34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f858e9051fbcca841710b1f6c57accde765dcd79bc25d04d7ceb8789ebfcce34->enter($__internal_f858e9051fbcca841710b1f6c57accde765dcd79bc25d04d7ceb8789ebfcce34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_2de7b3e9d0165b4af86e5a2875eef726fe1cbd8c5c9910c4512f98d094bd73b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2de7b3e9d0165b4af86e5a2875eef726fe1cbd8c5c9910c4512f98d094bd73b0->enter($__internal_2de7b3e9d0165b4af86e5a2875eef726fe1cbd8c5c9910c4512f98d094bd73b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 14
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 15
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 16
            $context["valid"] = true;
        }
        // line 18
        $this->displayParentBlock("datetime_widget", $context, $blocks);
        
        $__internal_2de7b3e9d0165b4af86e5a2875eef726fe1cbd8c5c9910c4512f98d094bd73b0->leave($__internal_2de7b3e9d0165b4af86e5a2875eef726fe1cbd8c5c9910c4512f98d094bd73b0_prof);

        
        $__internal_f858e9051fbcca841710b1f6c57accde765dcd79bc25d04d7ceb8789ebfcce34->leave($__internal_f858e9051fbcca841710b1f6c57accde765dcd79bc25d04d7ceb8789ebfcce34_prof);

    }

    // line 21
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_8a0205ad93a85a66ec33162e8666bd7e9fb1bbb7324a0b1058d211d7c6c4cccd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a0205ad93a85a66ec33162e8666bd7e9fb1bbb7324a0b1058d211d7c6c4cccd->enter($__internal_8a0205ad93a85a66ec33162e8666bd7e9fb1bbb7324a0b1058d211d7c6c4cccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_d4dc2a67f18b528ce94418881c7aed4fe60fb95c507ea4f7d24cb673c4be18b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4dc2a67f18b528ce94418881c7aed4fe60fb95c507ea4f7d24cb673c4be18b5->enter($__internal_d4dc2a67f18b528ce94418881c7aed4fe60fb95c507ea4f7d24cb673c4be18b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 22
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 23
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 24
            $context["valid"] = true;
        }
        // line 26
        $this->displayParentBlock("date_widget", $context, $blocks);
        
        $__internal_d4dc2a67f18b528ce94418881c7aed4fe60fb95c507ea4f7d24cb673c4be18b5->leave($__internal_d4dc2a67f18b528ce94418881c7aed4fe60fb95c507ea4f7d24cb673c4be18b5_prof);

        
        $__internal_8a0205ad93a85a66ec33162e8666bd7e9fb1bbb7324a0b1058d211d7c6c4cccd->leave($__internal_8a0205ad93a85a66ec33162e8666bd7e9fb1bbb7324a0b1058d211d7c6c4cccd_prof);

    }

    // line 29
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_dd4dd817159f3b462aa753189cc843159ab956cc89d982916dd160e389baf768 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd4dd817159f3b462aa753189cc843159ab956cc89d982916dd160e389baf768->enter($__internal_dd4dd817159f3b462aa753189cc843159ab956cc89d982916dd160e389baf768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_a44b3d7109f754f1f3fb0c871521cbb39cc70f10b64cb4dfed94c176b781e2a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a44b3d7109f754f1f3fb0c871521cbb39cc70f10b64cb4dfed94c176b781e2a3->enter($__internal_a44b3d7109f754f1f3fb0c871521cbb39cc70f10b64cb4dfed94c176b781e2a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 30
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 31
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 32
            $context["valid"] = true;
        }
        // line 34
        $this->displayParentBlock("time_widget", $context, $blocks);
        
        $__internal_a44b3d7109f754f1f3fb0c871521cbb39cc70f10b64cb4dfed94c176b781e2a3->leave($__internal_a44b3d7109f754f1f3fb0c871521cbb39cc70f10b64cb4dfed94c176b781e2a3_prof);

        
        $__internal_dd4dd817159f3b462aa753189cc843159ab956cc89d982916dd160e389baf768->leave($__internal_dd4dd817159f3b462aa753189cc843159ab956cc89d982916dd160e389baf768_prof);

    }

    // line 37
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_71cd6b63eac8bcb6e02c3250375c01feff2c7f1c153de978b0158b90d2faf780 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71cd6b63eac8bcb6e02c3250375c01feff2c7f1c153de978b0158b90d2faf780->enter($__internal_71cd6b63eac8bcb6e02c3250375c01feff2c7f1c153de978b0158b90d2faf780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_04e7f1467dee0af64ae877e99bd588a93747b65ae3aac80815a242fb225b9b13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04e7f1467dee0af64ae877e99bd588a93747b65ae3aac80815a242fb225b9b13->enter($__internal_04e7f1467dee0af64ae877e99bd588a93747b65ae3aac80815a242fb225b9b13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 38
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 39
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 40
            $context["valid"] = true;
        }
        // line 42
        $this->displayParentBlock("dateinterval_widget", $context, $blocks);
        
        $__internal_04e7f1467dee0af64ae877e99bd588a93747b65ae3aac80815a242fb225b9b13->leave($__internal_04e7f1467dee0af64ae877e99bd588a93747b65ae3aac80815a242fb225b9b13_prof);

        
        $__internal_71cd6b63eac8bcb6e02c3250375c01feff2c7f1c153de978b0158b90d2faf780->leave($__internal_71cd6b63eac8bcb6e02c3250375c01feff2c7f1c153de978b0158b90d2faf780_prof);

    }

    // line 45
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_4a7773701350f9c9578951f1a7cdf37c59182edd4eed8ed620b8428b80499603 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a7773701350f9c9578951f1a7cdf37c59182edd4eed8ed620b8428b80499603->enter($__internal_4a7773701350f9c9578951f1a7cdf37c59182edd4eed8ed620b8428b80499603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_60fc6850b92577a57c57c14f42bbdf3b07c9e61c0b8eb20f1abc8dd7c5034661 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60fc6850b92577a57c57c14f42bbdf3b07c9e61c0b8eb20f1abc8dd7c5034661->enter($__internal_60fc6850b92577a57c57c14f42bbdf3b07c9e61c0b8eb20f1abc8dd7c5034661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 46
        echo "<div class=\"input-group";
        echo (( !($context["valid"] ?? $this->getContext($context, "valid"))) ? (" form-control is-invalid") : (""));
        echo "\">
        ";
        // line 47
        $context["valid"] = true;
        // line 48
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 49
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_60fc6850b92577a57c57c14f42bbdf3b07c9e61c0b8eb20f1abc8dd7c5034661->leave($__internal_60fc6850b92577a57c57c14f42bbdf3b07c9e61c0b8eb20f1abc8dd7c5034661_prof);

        
        $__internal_4a7773701350f9c9578951f1a7cdf37c59182edd4eed8ed620b8428b80499603->leave($__internal_4a7773701350f9c9578951f1a7cdf37c59182edd4eed8ed620b8428b80499603_prof);

    }

    // line 53
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_d5456c3170f87eccbb8f8e23dabe5722c329edb42ce62e7055d8bae903ab4148 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5456c3170f87eccbb8f8e23dabe5722c329edb42ce62e7055d8bae903ab4148->enter($__internal_d5456c3170f87eccbb8f8e23dabe5722c329edb42ce62e7055d8bae903ab4148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_bc48f302782282ccd2b3df8fd4ff250cceea22690833471f2bc0af3065a50417 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc48f302782282ccd2b3df8fd4ff250cceea22690833471f2bc0af3065a50417->enter($__internal_bc48f302782282ccd2b3df8fd4ff250cceea22690833471f2bc0af3065a50417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 54
        if (( !array_key_exists("type", $context) || (($context["type"] ?? $this->getContext($context, "type")) != "hidden"))) {
            // line 55
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control") . (((((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "")) : ("")) == "file")) ? ("-file") : (""))))));
        }
        // line 57
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_bc48f302782282ccd2b3df8fd4ff250cceea22690833471f2bc0af3065a50417->leave($__internal_bc48f302782282ccd2b3df8fd4ff250cceea22690833471f2bc0af3065a50417_prof);

        
        $__internal_d5456c3170f87eccbb8f8e23dabe5722c329edb42ce62e7055d8bae903ab4148->leave($__internal_d5456c3170f87eccbb8f8e23dabe5722c329edb42ce62e7055d8bae903ab4148_prof);

    }

    // line 60
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_9a584ed4d52b62f2258dd6bce8f00a61dbb55665066194d51dfbf9cd6e789bce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a584ed4d52b62f2258dd6bce8f00a61dbb55665066194d51dfbf9cd6e789bce->enter($__internal_9a584ed4d52b62f2258dd6bce8f00a61dbb55665066194d51dfbf9cd6e789bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        $__internal_c4f30628e680eb5a39f4fb85c5eb8e1cbcecbf2d3b56416bd28a37997ef66f2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4f30628e680eb5a39f4fb85c5eb8e1cbcecbf2d3b56416bd28a37997ef66f2f->enter($__internal_c4f30628e680eb5a39f4fb85c5eb8e1cbcecbf2d3b56416bd28a37997ef66f2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 61
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            // line 62
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 63
            echo "    ";
        }
        // line 64
        $this->displayParentBlock("widget_attributes", $context, $blocks);
        
        $__internal_c4f30628e680eb5a39f4fb85c5eb8e1cbcecbf2d3b56416bd28a37997ef66f2f->leave($__internal_c4f30628e680eb5a39f4fb85c5eb8e1cbcecbf2d3b56416bd28a37997ef66f2f_prof);

        
        $__internal_9a584ed4d52b62f2258dd6bce8f00a61dbb55665066194d51dfbf9cd6e789bce->leave($__internal_9a584ed4d52b62f2258dd6bce8f00a61dbb55665066194d51dfbf9cd6e789bce_prof);

    }

    // line 67
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_198b226e9e4fa5c97cc15f5b3f4d977147a9b57d4f95f465ddedd09223b1d402 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_198b226e9e4fa5c97cc15f5b3f4d977147a9b57d4f95f465ddedd09223b1d402->enter($__internal_198b226e9e4fa5c97cc15f5b3f4d977147a9b57d4f95f465ddedd09223b1d402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_ff8e8faef94c5cf8ab46329b97e04715694cef5349cddb5f3d57c931cf1df4e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff8e8faef94c5cf8ab46329b97e04715694cef5349cddb5f3d57c931cf1df4e5->enter($__internal_ff8e8faef94c5cf8ab46329b97e04715694cef5349cddb5f3d57c931cf1df4e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 68
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-secondary")) : ("btn-secondary")) . " btn"))));
        // line 69
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_ff8e8faef94c5cf8ab46329b97e04715694cef5349cddb5f3d57c931cf1df4e5->leave($__internal_ff8e8faef94c5cf8ab46329b97e04715694cef5349cddb5f3d57c931cf1df4e5_prof);

        
        $__internal_198b226e9e4fa5c97cc15f5b3f4d977147a9b57d4f95f465ddedd09223b1d402->leave($__internal_198b226e9e4fa5c97cc15f5b3f4d977147a9b57d4f95f465ddedd09223b1d402_prof);

    }

    // line 72
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_405b6708defb4b12099b0cbfbf917f528a03dff6ae16e3a369d68b5656123994 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_405b6708defb4b12099b0cbfbf917f528a03dff6ae16e3a369d68b5656123994->enter($__internal_405b6708defb4b12099b0cbfbf917f528a03dff6ae16e3a369d68b5656123994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_0bd0484b3ef53b62d5d2877c5a37ebc13961a541ca5a6cbc95a1f9fa437e87f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bd0484b3ef53b62d5d2877c5a37ebc13961a541ca5a6cbc95a1f9fa437e87f5->enter($__internal_0bd0484b3ef53b62d5d2877c5a37ebc13961a541ca5a6cbc95a1f9fa437e87f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 73
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 74
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-check-input"))));
        // line 75
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 76
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 78
            echo "<div class=\"form-check";
            echo (( !($context["valid"] ?? $this->getContext($context, "valid"))) ? (" form-control is-invalid") : (""));
            echo "\">";
            // line 79
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 80
            echo "</div>";
        }
        
        $__internal_0bd0484b3ef53b62d5d2877c5a37ebc13961a541ca5a6cbc95a1f9fa437e87f5->leave($__internal_0bd0484b3ef53b62d5d2877c5a37ebc13961a541ca5a6cbc95a1f9fa437e87f5_prof);

        
        $__internal_405b6708defb4b12099b0cbfbf917f528a03dff6ae16e3a369d68b5656123994->leave($__internal_405b6708defb4b12099b0cbfbf917f528a03dff6ae16e3a369d68b5656123994_prof);

    }

    // line 84
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_68cb5eb2771486a4fbd805785770160975d02ca8fe02c8ae46bece99636c70a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68cb5eb2771486a4fbd805785770160975d02ca8fe02c8ae46bece99636c70a5->enter($__internal_68cb5eb2771486a4fbd805785770160975d02ca8fe02c8ae46bece99636c70a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_36f77cae6b0c7928c069bbee6ed394bffe8c8f8c68242a2ea192d38ac1726c03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36f77cae6b0c7928c069bbee6ed394bffe8c8f8c68242a2ea192d38ac1726c03->enter($__internal_36f77cae6b0c7928c069bbee6ed394bffe8c8f8c68242a2ea192d38ac1726c03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 85
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 86
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-check-input"))));
        // line 87
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 88
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 90
            echo "<div class=\"form-check";
            echo (( !($context["valid"] ?? $this->getContext($context, "valid"))) ? (" form-control is-invalid") : (""));
            echo "\">";
            // line 91
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 92
            echo "</div>";
        }
        
        $__internal_36f77cae6b0c7928c069bbee6ed394bffe8c8f8c68242a2ea192d38ac1726c03->leave($__internal_36f77cae6b0c7928c069bbee6ed394bffe8c8f8c68242a2ea192d38ac1726c03_prof);

        
        $__internal_68cb5eb2771486a4fbd805785770160975d02ca8fe02c8ae46bece99636c70a5->leave($__internal_68cb5eb2771486a4fbd805785770160975d02ca8fe02c8ae46bece99636c70a5_prof);

    }

    // line 96
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_2efc3574b875f4dae7eb54d06bebd4147fe1d9a7b1ec13818ff16518faf7fdc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2efc3574b875f4dae7eb54d06bebd4147fe1d9a7b1ec13818ff16518faf7fdc9->enter($__internal_2efc3574b875f4dae7eb54d06bebd4147fe1d9a7b1ec13818ff16518faf7fdc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_4163ba410e81c54830130eae8484e8b73554bd87267c1c559247d219e12a6c2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4163ba410e81c54830130eae8484e8b73554bd87267c1c559247d219e12a6c2d->enter($__internal_4163ba410e81c54830130eae8484e8b73554bd87267c1c559247d219e12a6c2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 97
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 99
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 100
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 101
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain")), "valid" =>                 // line 102
($context["valid"] ?? $this->getContext($context, "valid"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 106
            if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
                // line 107
                $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            }
            // line 109
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 110
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 111
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 112
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 113
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain")), "valid" => true));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "</div>";
        }
        
        $__internal_4163ba410e81c54830130eae8484e8b73554bd87267c1c559247d219e12a6c2d->leave($__internal_4163ba410e81c54830130eae8484e8b73554bd87267c1c559247d219e12a6c2d_prof);

        
        $__internal_2efc3574b875f4dae7eb54d06bebd4147fe1d9a7b1ec13818ff16518faf7fdc9->leave($__internal_2efc3574b875f4dae7eb54d06bebd4147fe1d9a7b1ec13818ff16518faf7fdc9_prof);

    }

    // line 123
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_6a7ac880c4dc8aa7b02b59468e5c972a087f7aaf523730ce7a6540a545d2766c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a7ac880c4dc8aa7b02b59468e5c972a087f7aaf523730ce7a6540a545d2766c->enter($__internal_6a7ac880c4dc8aa7b02b59468e5c972a087f7aaf523730ce7a6540a545d2766c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_2e6761878277c4c90aaf650d2e174a84920b8efa2f4606954434a646390f6f45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e6761878277c4c90aaf650d2e174a84920b8efa2f4606954434a646390f6f45->enter($__internal_2e6761878277c4c90aaf650d2e174a84920b8efa2f4606954434a646390f6f45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 124
        if ((array_key_exists("compound", $context) && ($context["compound"] ?? $this->getContext($context, "compound")))) {
            // line 125
            $context["element"] = "legend";
            // line 126
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " col-form-legend"))));
        } else {
            // line 128
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " form-control-label"))));
        }
        // line 130
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_2e6761878277c4c90aaf650d2e174a84920b8efa2f4606954434a646390f6f45->leave($__internal_2e6761878277c4c90aaf650d2e174a84920b8efa2f4606954434a646390f6f45_prof);

        
        $__internal_6a7ac880c4dc8aa7b02b59468e5c972a087f7aaf523730ce7a6540a545d2766c->leave($__internal_6a7ac880c4dc8aa7b02b59468e5c972a087f7aaf523730ce7a6540a545d2766c_prof);

    }

    // line 133
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_706530107979b6232706f82f1701959b7fafad1a3387fbb9a80e65085b35b6b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_706530107979b6232706f82f1701959b7fafad1a3387fbb9a80e65085b35b6b3->enter($__internal_706530107979b6232706f82f1701959b7fafad1a3387fbb9a80e65085b35b6b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_03a24b526661941d023e1b1806d8f83c3a5344c9b5405e25c7c976e9366256b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03a24b526661941d023e1b1806d8f83c3a5344c9b5405e25c7c976e9366256b9->enter($__internal_03a24b526661941d023e1b1806d8f83c3a5344c9b5405e25c7c976e9366256b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 135
        if (array_key_exists("widget", $context)) {
            // line 136
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " form-check-label"))));
            // line 137
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 138
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 140
            if (array_key_exists("parent_label_class", $context)) {
                // line 141
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
            }
            // line 143
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 144
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 145
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 146
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 147
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 150
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 153
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 154
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 155
            echo "</label>";
        }
        
        $__internal_03a24b526661941d023e1b1806d8f83c3a5344c9b5405e25c7c976e9366256b9->leave($__internal_03a24b526661941d023e1b1806d8f83c3a5344c9b5405e25c7c976e9366256b9_prof);

        
        $__internal_706530107979b6232706f82f1701959b7fafad1a3387fbb9a80e65085b35b6b3->leave($__internal_706530107979b6232706f82f1701959b7fafad1a3387fbb9a80e65085b35b6b3_prof);

    }

    // line 161
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_cced68028c517b14ddba11f9599da8d47dbb465b4f0d267ccdea1e653361375a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cced68028c517b14ddba11f9599da8d47dbb465b4f0d267ccdea1e653361375a->enter($__internal_cced68028c517b14ddba11f9599da8d47dbb465b4f0d267ccdea1e653361375a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_440dabebb0a31c62a35f8303281ba066b20f5afdc8a0a2707b80a8ac25da3b76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_440dabebb0a31c62a35f8303281ba066b20f5afdc8a0a2707b80a8ac25da3b76->enter($__internal_440dabebb0a31c62a35f8303281ba066b20f5afdc8a0a2707b80a8ac25da3b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 162
        if ((array_key_exists("compound", $context) && ($context["compound"] ?? $this->getContext($context, "compound")))) {
            // line 163
            $context["element"] = "fieldset";
        }
        // line 165
        echo "<";
        echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter(($context["element"] ?? $this->getContext($context, "element")), "div")) : ("div")), "html", null, true);
        echo " class=\"form-group\">";
        // line 166
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 167
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 168
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 169
        echo "</";
        echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter(($context["element"] ?? $this->getContext($context, "element")), "div")) : ("div")), "html", null, true);
        echo ">";
        
        $__internal_440dabebb0a31c62a35f8303281ba066b20f5afdc8a0a2707b80a8ac25da3b76->leave($__internal_440dabebb0a31c62a35f8303281ba066b20f5afdc8a0a2707b80a8ac25da3b76_prof);

        
        $__internal_cced68028c517b14ddba11f9599da8d47dbb465b4f0d267ccdea1e653361375a->leave($__internal_cced68028c517b14ddba11f9599da8d47dbb465b4f0d267ccdea1e653361375a_prof);

    }

    // line 174
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_771db7841292393770a4cc4205b6c5ca37c956883a054d8cd2aace16cc565a2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_771db7841292393770a4cc4205b6c5ca37c956883a054d8cd2aace16cc565a2c->enter($__internal_771db7841292393770a4cc4205b6c5ca37c956883a054d8cd2aace16cc565a2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_6a40d195e10947b3b70b27d41b0cd7df5e579c57072a02600e868f7a127fd970 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a40d195e10947b3b70b27d41b0cd7df5e579c57072a02600e868f7a127fd970->enter($__internal_6a40d195e10947b3b70b27d41b0cd7df5e579c57072a02600e868f7a127fd970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 175
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 176
            echo "<div class=\"";
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "invalid-feedback";
            } else {
                echo "alert alert-danger";
            }
            echo "\">
        <ul class=\"list-unstyled mb-0\">";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 179
                echo "<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 181
            echo "</ul>
    </div>";
        }
        
        $__internal_6a40d195e10947b3b70b27d41b0cd7df5e579c57072a02600e868f7a127fd970->leave($__internal_6a40d195e10947b3b70b27d41b0cd7df5e579c57072a02600e868f7a127fd970_prof);

        
        $__internal_771db7841292393770a4cc4205b6c5ca37c956883a054d8cd2aace16cc565a2c->leave($__internal_771db7841292393770a4cc4205b6c5ca37c956883a054d8cd2aace16cc565a2c_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_4_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  672 => 181,  664 => 179,  660 => 178,  651 => 176,  649 => 175,  640 => 174,  628 => 169,  626 => 168,  624 => 167,  622 => 166,  618 => 165,  615 => 163,  613 => 162,  604 => 161,  593 => 155,  589 => 154,  574 => 153,  570 => 150,  567 => 147,  566 => 146,  565 => 145,  563 => 144,  561 => 143,  558 => 141,  556 => 140,  553 => 138,  551 => 137,  549 => 136,  547 => 135,  538 => 133,  528 => 130,  525 => 128,  522 => 126,  520 => 125,  518 => 124,  509 => 123,  498 => 117,  492 => 113,  491 => 112,  490 => 111,  486 => 110,  482 => 109,  479 => 107,  477 => 106,  470 => 102,  469 => 101,  468 => 100,  467 => 99,  463 => 98,  461 => 97,  452 => 96,  441 => 92,  439 => 91,  435 => 90,  432 => 88,  430 => 87,  428 => 86,  426 => 85,  417 => 84,  406 => 80,  404 => 79,  400 => 78,  397 => 76,  395 => 75,  393 => 74,  391 => 73,  382 => 72,  372 => 69,  370 => 68,  361 => 67,  351 => 64,  348 => 63,  345 => 62,  343 => 61,  334 => 60,  324 => 57,  321 => 55,  319 => 54,  310 => 53,  299 => 49,  297 => 48,  295 => 47,  290 => 46,  281 => 45,  271 => 42,  268 => 40,  266 => 39,  264 => 38,  255 => 37,  245 => 34,  242 => 32,  240 => 31,  238 => 30,  229 => 29,  219 => 26,  216 => 24,  214 => 23,  212 => 22,  203 => 21,  193 => 18,  190 => 16,  188 => 15,  186 => 14,  177 => 13,  167 => 10,  164 => 9,  161 => 8,  158 => 7,  156 => 6,  147 => 5,  137 => 174,  134 => 173,  131 => 171,  129 => 161,  126 => 160,  123 => 158,  121 => 133,  118 => 132,  116 => 123,  113 => 122,  110 => 120,  108 => 96,  105 => 95,  103 => 84,  100 => 83,  98 => 72,  95 => 71,  93 => 67,  91 => 60,  89 => 53,  86 => 52,  84 => 45,  81 => 44,  79 => 37,  76 => 36,  74 => 29,  71 => 28,  69 => 21,  66 => 20,  64 => 13,  61 => 12,  59 => 5,  56 => 4,  53 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_base_layout.html.twig\" %}

{# Widgets #}

{% block money_widget -%}
    {% if not valid %}
        {% set group_class = ' form-control is-invalid' %}
        {% set valid = true %}
    {% endif %}
    {{- parent() -}}
{%- endblock money_widget %}

{% block datetime_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock date_widget %}

{% block time_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock time_widget %}

{% block dateinterval_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock dateinterval_widget %}

{% block percent_widget -%}
    <div class=\"input-group{{ not valid ? ' form-control is-invalid' }}\">
        {% set valid = true %}
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block form_widget_simple -%}
    {% if type is not defined or type != 'hidden' %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control' ~ (type|default('') == 'file' ? '-file' : ''))|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{%- block widget_attributes -%}
    {%- if not valid %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) %}
    {% endif -%}
    {{ parent() }}
{%- endblock widget_attributes -%}

{% block button_widget -%}
    {%- set attr = attr|merge({class: (attr.class|default('btn-secondary') ~ ' btn')|trim}) -%}
    {{- parent() -}}
{%- endblock button_widget %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-check-input')|trim}) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"form-check{{ not valid ? ' form-control is-invalid' }}\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-check-input')|trim}) -%}
    {%- if 'radio-inline' in parent_label_class -%}
        {{- form_label(form, null, { widget: parent() }) -}}
    {%- else -%}
        <div class=\"form-check{{ not valid ? ' form-control is-invalid' }}\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock radio_widget %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
                valid: valid,
            }) -}}
        {% endfor -%}
    {%- else -%}
        {%- if not valid -%}
            {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) %}
        {%- endif -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                    valid: true,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{# Labels #}

{% block form_label -%}
    {%- if compound is defined and compound -%}
        {%- set element = 'legend' -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' col-form-legend')|trim}) -%}
    {%- else -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' form-control-label')|trim}) -%}
    {%- endif -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block checkbox_radio_label -%}
    {#- Do not display the label if widget is not defined in order to prevent double label rendering -#}
    {%- if widget is defined -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' form-check-label')|trim}) -%}
        {%- if required -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) -%}
        {%- endif -%}
        {%- if parent_label_class is defined -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) -%}
        {%- endif -%}
        {%- if label is not same as(false) and label is empty -%}
            {%- if label_format is not empty -%}
                {%- set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) -%}
            {%- else -%}
                {%- set label = name|humanize -%}
            {%- endif -%}
        {%- endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {%- endif -%}
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    {%- if compound is defined and compound -%}
        {%- set element = 'fieldset' -%}
    {%- endif -%}
    <{{ element|default('div') }} class=\"form-group\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </{{ element|default('div') }}>
{%- endblock form_row %}

{# Errors #}

{% block form_errors -%}
    {%- if errors|length > 0 -%}
    <div class=\"{% if form.parent %}invalid-feedback{% else %}alert alert-danger{% endif %}\">
        <ul class=\"list-unstyled mb-0\">
            {%- for error in errors -%}
                <li>{{ error.message }}</li>
            {%- endfor -%}
        </ul>
    </div>
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_4_layout.html.twig", "/home/nicolaescu/Workspace/Car-Rental/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_4_layout.html.twig");
    }
}
