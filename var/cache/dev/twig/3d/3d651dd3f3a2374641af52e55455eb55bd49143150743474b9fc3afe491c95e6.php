<?php

/* foundation_5_layout.html.twig */
class __TwigTemplate_89c3c979abaa84907bcd18a5fd044abc4e041f4ee091b4b35527607c7a2e2733 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "foundation_5_layout.html.twig", 1);
        $this->blocks = array(
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'form_label' => array($this, 'block_form_label'),
            'choice_label' => array($this, 'block_choice_label'),
            'checkbox_label' => array($this, 'block_checkbox_label'),
            'radio_label' => array($this, 'block_radio_label'),
            'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
            'form_row' => array($this, 'block_form_row'),
            'choice_row' => array($this, 'block_choice_row'),
            'date_row' => array($this, 'block_date_row'),
            'time_row' => array($this, 'block_time_row'),
            'datetime_row' => array($this, 'block_datetime_row'),
            'checkbox_row' => array($this, 'block_checkbox_row'),
            'radio_row' => array($this, 'block_radio_row'),
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7dbe3cabf0a9919a17fcbd6442fe90127d1105693c1bb94bceba856d4902b6a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dbe3cabf0a9919a17fcbd6442fe90127d1105693c1bb94bceba856d4902b6a2->enter($__internal_7dbe3cabf0a9919a17fcbd6442fe90127d1105693c1bb94bceba856d4902b6a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $__internal_9fd4db2d93658bcdcea33bd1089c8c5b9dd31078bbd726eeb093e53bd7411158 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fd4db2d93658bcdcea33bd1089c8c5b9dd31078bbd726eeb093e53bd7411158->enter($__internal_9fd4db2d93658bcdcea33bd1089c8c5b9dd31078bbd726eeb093e53bd7411158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7dbe3cabf0a9919a17fcbd6442fe90127d1105693c1bb94bceba856d4902b6a2->leave($__internal_7dbe3cabf0a9919a17fcbd6442fe90127d1105693c1bb94bceba856d4902b6a2_prof);

        
        $__internal_9fd4db2d93658bcdcea33bd1089c8c5b9dd31078bbd726eeb093e53bd7411158->leave($__internal_9fd4db2d93658bcdcea33bd1089c8c5b9dd31078bbd726eeb093e53bd7411158_prof);

    }

    // line 6
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_bb3d9d19a0c72697f83bc5d5450707b5c60a81058f1a6ed4ca175ca779448ffa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb3d9d19a0c72697f83bc5d5450707b5c60a81058f1a6ed4ca175ca779448ffa->enter($__internal_bb3d9d19a0c72697f83bc5d5450707b5c60a81058f1a6ed4ca175ca779448ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_9514da34782b10e28c93c039f590ee1878ae5af4942a766089a4fca9d9750655 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9514da34782b10e28c93c039f590ee1878ae5af4942a766089a4fca9d9750655->enter($__internal_9514da34782b10e28c93c039f590ee1878ae5af4942a766089a4fca9d9750655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 7
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 8
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_9514da34782b10e28c93c039f590ee1878ae5af4942a766089a4fca9d9750655->leave($__internal_9514da34782b10e28c93c039f590ee1878ae5af4942a766089a4fca9d9750655_prof);

        
        $__internal_bb3d9d19a0c72697f83bc5d5450707b5c60a81058f1a6ed4ca175ca779448ffa->leave($__internal_bb3d9d19a0c72697f83bc5d5450707b5c60a81058f1a6ed4ca175ca779448ffa_prof);

    }

    // line 13
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_dcb678286928f926f9cf84a07ae962a319238a44e2582d5a6198ea7f507cb595 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcb678286928f926f9cf84a07ae962a319238a44e2582d5a6198ea7f507cb595->enter($__internal_dcb678286928f926f9cf84a07ae962a319238a44e2582d5a6198ea7f507cb595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_3254a832a8386f8c87505fa2b6778d2212db4094be9c0c264467b7cd74022de4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3254a832a8386f8c87505fa2b6778d2212db4094be9c0c264467b7cd74022de4->enter($__internal_3254a832a8386f8c87505fa2b6778d2212db4094be9c0c264467b7cd74022de4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 14
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 15
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 16
            echo "    ";
        }
        // line 17
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_3254a832a8386f8c87505fa2b6778d2212db4094be9c0c264467b7cd74022de4->leave($__internal_3254a832a8386f8c87505fa2b6778d2212db4094be9c0c264467b7cd74022de4_prof);

        
        $__internal_dcb678286928f926f9cf84a07ae962a319238a44e2582d5a6198ea7f507cb595->leave($__internal_dcb678286928f926f9cf84a07ae962a319238a44e2582d5a6198ea7f507cb595_prof);

    }

    // line 20
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_9700aef32587c455775260795ece25c6d3bdeb1eaa2a35301b0ee5028373ed63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9700aef32587c455775260795ece25c6d3bdeb1eaa2a35301b0ee5028373ed63->enter($__internal_9700aef32587c455775260795ece25c6d3bdeb1eaa2a35301b0ee5028373ed63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_b1032fb983a2de9bfb35b32e2f4a7079140a79281571d95166b6c327ddb20317 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1032fb983a2de9bfb35b32e2f4a7079140a79281571d95166b6c327ddb20317->enter($__internal_b1032fb983a2de9bfb35b32e2f4a7079140a79281571d95166b6c327ddb20317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 21
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " button"))));
        // line 22
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_b1032fb983a2de9bfb35b32e2f4a7079140a79281571d95166b6c327ddb20317->leave($__internal_b1032fb983a2de9bfb35b32e2f4a7079140a79281571d95166b6c327ddb20317_prof);

        
        $__internal_9700aef32587c455775260795ece25c6d3bdeb1eaa2a35301b0ee5028373ed63->leave($__internal_9700aef32587c455775260795ece25c6d3bdeb1eaa2a35301b0ee5028373ed63_prof);

    }

    // line 25
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_f69623c78fb5d1fd345116fa651c2b191de0c3cf0e6cc889f19268bc3026a359 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f69623c78fb5d1fd345116fa651c2b191de0c3cf0e6cc889f19268bc3026a359->enter($__internal_f69623c78fb5d1fd345116fa651c2b191de0c3cf0e6cc889f19268bc3026a359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_76a851598dbf2529f7ec304a5db00676ec434fa99cc3f5f8b08990253548447b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76a851598dbf2529f7ec304a5db00676ec434fa99cc3f5f8b08990253548447b->enter($__internal_76a851598dbf2529f7ec304a5db00676ec434fa99cc3f5f8b08990253548447b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 26
        echo "<div class=\"row collapse\">
        ";
        // line 27
        $context["prepend"] = ("{{" == twig_slice($this->env, ($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), 0, 2));
        // line 28
        echo "        ";
        if ( !($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 29
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">";
            // line 30
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 33
        echo "        <div class=\"small-9 large-10 columns\">";
        // line 34
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 35
        echo "</div>
        ";
        // line 36
        if (($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 37
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">";
            // line 38
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 41
        echo "    </div>";
        
        $__internal_76a851598dbf2529f7ec304a5db00676ec434fa99cc3f5f8b08990253548447b->leave($__internal_76a851598dbf2529f7ec304a5db00676ec434fa99cc3f5f8b08990253548447b_prof);

        
        $__internal_f69623c78fb5d1fd345116fa651c2b191de0c3cf0e6cc889f19268bc3026a359->leave($__internal_f69623c78fb5d1fd345116fa651c2b191de0c3cf0e6cc889f19268bc3026a359_prof);

    }

    // line 44
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_d255bfbcffa716c6579c0e701e1c1a6420a87a139777088ed79654504cf2b54d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d255bfbcffa716c6579c0e701e1c1a6420a87a139777088ed79654504cf2b54d->enter($__internal_d255bfbcffa716c6579c0e701e1c1a6420a87a139777088ed79654504cf2b54d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_37c3ce0dfee9ecd98a992f1e197a9f69b127706d7ab508f08424fed79dc7fe60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37c3ce0dfee9ecd98a992f1e197a9f69b127706d7ab508f08424fed79dc7fe60->enter($__internal_37c3ce0dfee9ecd98a992f1e197a9f69b127706d7ab508f08424fed79dc7fe60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 45
        echo "<div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">";
        // line 47
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 48
        echo "</div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>";
        
        $__internal_37c3ce0dfee9ecd98a992f1e197a9f69b127706d7ab508f08424fed79dc7fe60->leave($__internal_37c3ce0dfee9ecd98a992f1e197a9f69b127706d7ab508f08424fed79dc7fe60_prof);

        
        $__internal_d255bfbcffa716c6579c0e701e1c1a6420a87a139777088ed79654504cf2b54d->leave($__internal_d255bfbcffa716c6579c0e701e1c1a6420a87a139777088ed79654504cf2b54d_prof);

    }

    // line 55
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_df2f879b4ae63facd728d58998e04433ac0359937c68dbb7b098cc10ce0370e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df2f879b4ae63facd728d58998e04433ac0359937c68dbb7b098cc10ce0370e8->enter($__internal_df2f879b4ae63facd728d58998e04433ac0359937c68dbb7b098cc10ce0370e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_60b5f1f982a2f52c263ea945dd6803c5c547a99b4b21b6e3861f40148fd376ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60b5f1f982a2f52c263ea945dd6803c5c547a99b4b21b6e3861f40148fd376ed->enter($__internal_60b5f1f982a2f52c263ea945dd6803c5c547a99b4b21b6e3861f40148fd376ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 56
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 57
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 59
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 60
            echo "        <div class=\"row\">
            <div class=\"large-7 columns\">";
            // line 61
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 62
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            echo "</div>
        </div>
        <div ";
            // line 64
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div class=\"large-7 columns\">";
            // line 65
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 66
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            echo "</div>
        </div>
    ";
        }
        
        $__internal_60b5f1f982a2f52c263ea945dd6803c5c547a99b4b21b6e3861f40148fd376ed->leave($__internal_60b5f1f982a2f52c263ea945dd6803c5c547a99b4b21b6e3861f40148fd376ed_prof);

        
        $__internal_df2f879b4ae63facd728d58998e04433ac0359937c68dbb7b098cc10ce0370e8->leave($__internal_df2f879b4ae63facd728d58998e04433ac0359937c68dbb7b098cc10ce0370e8_prof);

    }

    // line 71
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_0e2c433bb1979f017c992add8e259e64d5ba430ab3a37873d1c93d246fea5900 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e2c433bb1979f017c992add8e259e64d5ba430ab3a37873d1c93d246fea5900->enter($__internal_0e2c433bb1979f017c992add8e259e64d5ba430ab3a37873d1c93d246fea5900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_99b0487255876e76b4610b02a074a61249b465c8a1d16bfd486b90e36d3cb891 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99b0487255876e76b4610b02a074a61249b465c8a1d16bfd486b90e36d3cb891->enter($__internal_99b0487255876e76b4610b02a074a61249b465c8a1d16bfd486b90e36d3cb891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 72
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 73
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 75
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 76
            echo "        ";
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 77
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 79
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" => (("<div class=\"large-4 columns\">" .             // line 80
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget')) . "</div>"), "{{ month }}" => (("<div class=\"large-4 columns\">" .             // line 81
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget')) . "</div>"), "{{ day }}" => (("<div class=\"large-4 columns\">" .             // line 82
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')) . "</div>")));
            // line 84
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 85
                echo "            </div>
        ";
            }
            // line 87
            echo "    ";
        }
        
        $__internal_99b0487255876e76b4610b02a074a61249b465c8a1d16bfd486b90e36d3cb891->leave($__internal_99b0487255876e76b4610b02a074a61249b465c8a1d16bfd486b90e36d3cb891_prof);

        
        $__internal_0e2c433bb1979f017c992add8e259e64d5ba430ab3a37873d1c93d246fea5900->leave($__internal_0e2c433bb1979f017c992add8e259e64d5ba430ab3a37873d1c93d246fea5900_prof);

    }

    // line 90
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_9e1f9851b39141830277b13d93f1df54088765150f4eefe375425be17b40e8e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e1f9851b39141830277b13d93f1df54088765150f4eefe375425be17b40e8e1->enter($__internal_9e1f9851b39141830277b13d93f1df54088765150f4eefe375425be17b40e8e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_121bcbaf91d44d2ce8d2ebc5ee218a5b6aa1663039379558971e27f6119cafe3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_121bcbaf91d44d2ce8d2ebc5ee218a5b6aa1663039379558971e27f6119cafe3->enter($__internal_121bcbaf91d44d2ce8d2ebc5ee218a5b6aa1663039379558971e27f6119cafe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 95
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 96
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 98
            echo "        ";
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                // line 99
                echo "            <div class=\"large-4 columns\">";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 106
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 116
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            } else {
                // line 121
                echo "            <div class=\"large-6 columns\">";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 128
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            }
            // line 133
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 134
                echo "            </div>
        ";
            }
            // line 136
            echo "    ";
        }
        
        $__internal_121bcbaf91d44d2ce8d2ebc5ee218a5b6aa1663039379558971e27f6119cafe3->leave($__internal_121bcbaf91d44d2ce8d2ebc5ee218a5b6aa1663039379558971e27f6119cafe3_prof);

        
        $__internal_9e1f9851b39141830277b13d93f1df54088765150f4eefe375425be17b40e8e1->leave($__internal_9e1f9851b39141830277b13d93f1df54088765150f4eefe375425be17b40e8e1_prof);

    }

    // line 139
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_c38882c6936fc71ba7f71228851fb7e2d725c081b6cd571800178b429f5e0ea1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c38882c6936fc71ba7f71228851fb7e2d725c081b6cd571800178b429f5e0ea1->enter($__internal_c38882c6936fc71ba7f71228851fb7e2d725c081b6cd571800178b429f5e0ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_40b0c49bdce6ea8c183cf50d80b530747100711ed8945f2c441951378c7d49af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40b0c49bdce6ea8c183cf50d80b530747100711ed8945f2c441951378c7d49af->enter($__internal_40b0c49bdce6ea8c183cf50d80b530747100711ed8945f2c441951378c7d49af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 140
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 141
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 142
            echo "    ";
        }
        // line 143
        echo "
    ";
        // line 144
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            // line 145
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("style" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "style", array()), "")) : ("")) . " height: auto; background-image: none;"))));
            // line 146
            echo "    ";
        }
        // line 147
        echo "
    ";
        // line 148
        if ((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple")))) {
            // line 149
            $context["required"] = false;
        }
        // line 151
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\" data-customforms=\"disabled\"";
        }
        echo ">
        ";
        // line 152
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 153
            echo "<option value=\"\"";
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["placeholder"] ?? $this->getContext($context, "placeholder"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</option>";
        }
        // line 155
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 156
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 157
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 158
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 159
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 162
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 163
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 164
        echo "</select>";
        
        $__internal_40b0c49bdce6ea8c183cf50d80b530747100711ed8945f2c441951378c7d49af->leave($__internal_40b0c49bdce6ea8c183cf50d80b530747100711ed8945f2c441951378c7d49af_prof);

        
        $__internal_c38882c6936fc71ba7f71228851fb7e2d725c081b6cd571800178b429f5e0ea1->leave($__internal_c38882c6936fc71ba7f71228851fb7e2d725c081b6cd571800178b429f5e0ea1_prof);

    }

    // line 167
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_6d5168c2f12b44a7319c5b17d7ae5dc3c4e0cc9711f2807a67222a04310c2e81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d5168c2f12b44a7319c5b17d7ae5dc3c4e0cc9711f2807a67222a04310c2e81->enter($__internal_6d5168c2f12b44a7319c5b17d7ae5dc3c4e0cc9711f2807a67222a04310c2e81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_e6f7291e6cf98fd3234e6a9aabd81c476061b81b2a2fc4f22533b45c0926af63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6f7291e6cf98fd3234e6a9aabd81c476061b81b2a2fc4f22533b45c0926af63->enter($__internal_e6f7291e6cf98fd3234e6a9aabd81c476061b81b2a2fc4f22533b45c0926af63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 168
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 169
            echo "        <ul class=\"inline-list\">
            ";
            // line 170
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 171
                echo "                <li>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 172
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 173
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            echo "        </ul>
    ";
        } else {
            // line 177
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 179
                echo "                ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 180
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 181
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "        </div>
    ";
        }
        
        $__internal_e6f7291e6cf98fd3234e6a9aabd81c476061b81b2a2fc4f22533b45c0926af63->leave($__internal_e6f7291e6cf98fd3234e6a9aabd81c476061b81b2a2fc4f22533b45c0926af63_prof);

        
        $__internal_6d5168c2f12b44a7319c5b17d7ae5dc3c4e0cc9711f2807a67222a04310c2e81->leave($__internal_6d5168c2f12b44a7319c5b17d7ae5dc3c4e0cc9711f2807a67222a04310c2e81_prof);

    }

    // line 187
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_37e5a9a727e5985d9123e2a7e42e4f56b99306761743f11d9edd15b8c49e2f6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37e5a9a727e5985d9123e2a7e42e4f56b99306761743f11d9edd15b8c49e2f6d->enter($__internal_37e5a9a727e5985d9123e2a7e42e4f56b99306761743f11d9edd15b8c49e2f6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_63dd2c18ec77b4246b2ce16e4df327b4bfab7664654609c5e8771f0aeb9261e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63dd2c18ec77b4246b2ce16e4df327b4bfab7664654609c5e8771f0aeb9261e4->enter($__internal_63dd2c18ec77b4246b2ce16e4df327b4bfab7664654609c5e8771f0aeb9261e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 188
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 189
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 190
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 191
            echo "    ";
        }
        // line 192
        echo "    ";
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 193
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 195
            echo "        <div class=\"checkbox\">
            ";
            // line 196
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_63dd2c18ec77b4246b2ce16e4df327b4bfab7664654609c5e8771f0aeb9261e4->leave($__internal_63dd2c18ec77b4246b2ce16e4df327b4bfab7664654609c5e8771f0aeb9261e4_prof);

        
        $__internal_37e5a9a727e5985d9123e2a7e42e4f56b99306761743f11d9edd15b8c49e2f6d->leave($__internal_37e5a9a727e5985d9123e2a7e42e4f56b99306761743f11d9edd15b8c49e2f6d_prof);

    }

    // line 201
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_26271528a803bc75e3f09186aefc251712b1931f8f7eacb9cbf0c8f76b69672b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26271528a803bc75e3f09186aefc251712b1931f8f7eacb9cbf0c8f76b69672b->enter($__internal_26271528a803bc75e3f09186aefc251712b1931f8f7eacb9cbf0c8f76b69672b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_de165cb71d89bc9bc552845807e3c03960efa694ed24f3c8c3c713fd2b5e51d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de165cb71d89bc9bc552845807e3c03960efa694ed24f3c8c3c713fd2b5e51d8->enter($__internal_de165cb71d89bc9bc552845807e3c03960efa694ed24f3c8c3c713fd2b5e51d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 202
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 203
        echo "    ";
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 204
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 206
            echo "        ";
            if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
                // line 207
                $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
                // line 208
                echo "        ";
            }
            // line 209
            echo "        <div class=\"radio\">
            ";
            // line 210
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_de165cb71d89bc9bc552845807e3c03960efa694ed24f3c8c3c713fd2b5e51d8->leave($__internal_de165cb71d89bc9bc552845807e3c03960efa694ed24f3c8c3c713fd2b5e51d8_prof);

        
        $__internal_26271528a803bc75e3f09186aefc251712b1931f8f7eacb9cbf0c8f76b69672b->leave($__internal_26271528a803bc75e3f09186aefc251712b1931f8f7eacb9cbf0c8f76b69672b_prof);

    }

    // line 217
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_e1f60c1764fc9f46ed7eae5a67ac19e2a5f99e7a8e415e8b475ddbc385c59815 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1f60c1764fc9f46ed7eae5a67ac19e2a5f99e7a8e415e8b475ddbc385c59815->enter($__internal_e1f60c1764fc9f46ed7eae5a67ac19e2a5f99e7a8e415e8b475ddbc385c59815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_86aed282a4e25fa774efbf8be1822c8034b3ecdb0a217570afa6e4e94c2c1841 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86aed282a4e25fa774efbf8be1822c8034b3ecdb0a217570afa6e4e94c2c1841->enter($__internal_86aed282a4e25fa774efbf8be1822c8034b3ecdb0a217570afa6e4e94c2c1841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 218
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 219
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 220
            echo "    ";
        }
        // line 221
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_86aed282a4e25fa774efbf8be1822c8034b3ecdb0a217570afa6e4e94c2c1841->leave($__internal_86aed282a4e25fa774efbf8be1822c8034b3ecdb0a217570afa6e4e94c2c1841_prof);

        
        $__internal_e1f60c1764fc9f46ed7eae5a67ac19e2a5f99e7a8e415e8b475ddbc385c59815->leave($__internal_e1f60c1764fc9f46ed7eae5a67ac19e2a5f99e7a8e415e8b475ddbc385c59815_prof);

    }

    // line 224
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_edc07b710ae629d39619026795482e1506fb3bc46dd4830d06bbb6660475c186 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edc07b710ae629d39619026795482e1506fb3bc46dd4830d06bbb6660475c186->enter($__internal_edc07b710ae629d39619026795482e1506fb3bc46dd4830d06bbb6660475c186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_ac7718e606a0131e4d0341f91c562c86efe39a9ab3bb5433c913c86eb51878ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac7718e606a0131e4d0341f91c562c86efe39a9ab3bb5433c913c86eb51878ee->enter($__internal_ac7718e606a0131e4d0341f91c562c86efe39a9ab3bb5433c913c86eb51878ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 225
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 226
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 227
            echo "    ";
        }
        // line 228
        echo "    ";
        // line 229
        echo "    ";
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 230
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_ac7718e606a0131e4d0341f91c562c86efe39a9ab3bb5433c913c86eb51878ee->leave($__internal_ac7718e606a0131e4d0341f91c562c86efe39a9ab3bb5433c913c86eb51878ee_prof);

        
        $__internal_edc07b710ae629d39619026795482e1506fb3bc46dd4830d06bbb6660475c186->leave($__internal_edc07b710ae629d39619026795482e1506fb3bc46dd4830d06bbb6660475c186_prof);

    }

    // line 233
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_a7122efba47d2b57e16b78335c754e373d0d4066cbc67efeb56c5d6f213ed36e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7122efba47d2b57e16b78335c754e373d0d4066cbc67efeb56c5d6f213ed36e->enter($__internal_a7122efba47d2b57e16b78335c754e373d0d4066cbc67efeb56c5d6f213ed36e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_d833f8a7aa763b661614f65c33dbc6909874478030c371e82c50d419c85136f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d833f8a7aa763b661614f65c33dbc6909874478030c371e82c50d419c85136f1->enter($__internal_d833f8a7aa763b661614f65c33dbc6909874478030c371e82c50d419c85136f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 234
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_d833f8a7aa763b661614f65c33dbc6909874478030c371e82c50d419c85136f1->leave($__internal_d833f8a7aa763b661614f65c33dbc6909874478030c371e82c50d419c85136f1_prof);

        
        $__internal_a7122efba47d2b57e16b78335c754e373d0d4066cbc67efeb56c5d6f213ed36e->leave($__internal_a7122efba47d2b57e16b78335c754e373d0d4066cbc67efeb56c5d6f213ed36e_prof);

    }

    // line 237
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_7c2e6a66297cfe9aea2fdee2410cd627d17918291eccfe10689375db8de7acbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c2e6a66297cfe9aea2fdee2410cd627d17918291eccfe10689375db8de7acbb->enter($__internal_7c2e6a66297cfe9aea2fdee2410cd627d17918291eccfe10689375db8de7acbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_4790eb6c20b8167cc87515f3c4cbbd759123ca3fb9304ec4978dd8bb168e30ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4790eb6c20b8167cc87515f3c4cbbd759123ca3fb9304ec4978dd8bb168e30ff->enter($__internal_4790eb6c20b8167cc87515f3c4cbbd759123ca3fb9304ec4978dd8bb168e30ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 238
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_4790eb6c20b8167cc87515f3c4cbbd759123ca3fb9304ec4978dd8bb168e30ff->leave($__internal_4790eb6c20b8167cc87515f3c4cbbd759123ca3fb9304ec4978dd8bb168e30ff_prof);

        
        $__internal_7c2e6a66297cfe9aea2fdee2410cd627d17918291eccfe10689375db8de7acbb->leave($__internal_7c2e6a66297cfe9aea2fdee2410cd627d17918291eccfe10689375db8de7acbb_prof);

    }

    // line 241
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_b7dd854dd55090028dbd50fdf70293cc2a7c8c714d091f384a17cb10db51fbe5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7dd854dd55090028dbd50fdf70293cc2a7c8c714d091f384a17cb10db51fbe5->enter($__internal_b7dd854dd55090028dbd50fdf70293cc2a7c8c714d091f384a17cb10db51fbe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_1930de4580a746b1cee043fa7e2d4322272ead6832af29f36ed6e11561424a01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1930de4580a746b1cee043fa7e2d4322272ead6832af29f36ed6e11561424a01->enter($__internal_1930de4580a746b1cee043fa7e2d4322272ead6832af29f36ed6e11561424a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 242
        if (($context["required"] ?? $this->getContext($context, "required"))) {
            // line 243
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            // line 244
            echo "    ";
        }
        // line 245
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 246
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 247
            echo "    ";
        }
        // line 248
        echo "    ";
        if (array_key_exists("parent_label_class", $context)) {
            // line 249
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
            // line 250
            echo "    ";
        }
        // line 251
        echo "    ";
        if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
            // line 252
            if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                // line 253
                $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                 // line 254
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                 // line 255
($context["id"] ?? $this->getContext($context, "id"))));
            } else {
                // line 258
                $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
            }
        }
        // line 261
        echo "    <label";
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
        echo ">
        ";
        // line 262
        echo ($context["widget"] ?? $this->getContext($context, "widget"));
        echo "
        ";
        // line 263
        echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
        echo "
    </label>";
        
        $__internal_1930de4580a746b1cee043fa7e2d4322272ead6832af29f36ed6e11561424a01->leave($__internal_1930de4580a746b1cee043fa7e2d4322272ead6832af29f36ed6e11561424a01_prof);

        
        $__internal_b7dd854dd55090028dbd50fdf70293cc2a7c8c714d091f384a17cb10db51fbe5->leave($__internal_b7dd854dd55090028dbd50fdf70293cc2a7c8c714d091f384a17cb10db51fbe5_prof);

    }

    // line 269
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_1fd22b7c57f04979c2317eb66bcfff57069e8d6a5c10f5c10cf4a58b617f47c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fd22b7c57f04979c2317eb66bcfff57069e8d6a5c10f5c10cf4a58b617f47c3->enter($__internal_1fd22b7c57f04979c2317eb66bcfff57069e8d6a5c10f5c10cf4a58b617f47c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_440ef1717a7df51eb59df7a2334ed313b4f8abf5ec2bee7af6f377e3577c4bce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_440ef1717a7df51eb59df7a2334ed313b4f8abf5ec2bee7af6f377e3577c4bce->enter($__internal_440ef1717a7df51eb59df7a2334ed313b4f8abf5ec2bee7af6f377e3577c4bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 270
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 271
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " error";
        }
        echo "\">
            ";
        // line 272
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        echo "
            ";
        // line 273
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 274
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_440ef1717a7df51eb59df7a2334ed313b4f8abf5ec2bee7af6f377e3577c4bce->leave($__internal_440ef1717a7df51eb59df7a2334ed313b4f8abf5ec2bee7af6f377e3577c4bce_prof);

        
        $__internal_1fd22b7c57f04979c2317eb66bcfff57069e8d6a5c10f5c10cf4a58b617f47c3->leave($__internal_1fd22b7c57f04979c2317eb66bcfff57069e8d6a5c10f5c10cf4a58b617f47c3_prof);

    }

    // line 279
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_fd4886dce5f62b9eaf1bc8e09aa8d0574037ae007e9c9babfd0e5fcf12ca8e38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd4886dce5f62b9eaf1bc8e09aa8d0574037ae007e9c9babfd0e5fcf12ca8e38->enter($__internal_fd4886dce5f62b9eaf1bc8e09aa8d0574037ae007e9c9babfd0e5fcf12ca8e38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_1df22aea34cde51efc0af26d12be4697f0de1391636ac34f23bdcf041740869d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1df22aea34cde51efc0af26d12be4697f0de1391636ac34f23bdcf041740869d->enter($__internal_1df22aea34cde51efc0af26d12be4697f0de1391636ac34f23bdcf041740869d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 280
        $context["force_error"] = true;
        // line 281
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_1df22aea34cde51efc0af26d12be4697f0de1391636ac34f23bdcf041740869d->leave($__internal_1df22aea34cde51efc0af26d12be4697f0de1391636ac34f23bdcf041740869d_prof);

        
        $__internal_fd4886dce5f62b9eaf1bc8e09aa8d0574037ae007e9c9babfd0e5fcf12ca8e38->leave($__internal_fd4886dce5f62b9eaf1bc8e09aa8d0574037ae007e9c9babfd0e5fcf12ca8e38_prof);

    }

    // line 284
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_95df34d91881c88a00e6fcdcfaea0ba2f1d0d7898f561810248a0b0531f5c463 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95df34d91881c88a00e6fcdcfaea0ba2f1d0d7898f561810248a0b0531f5c463->enter($__internal_95df34d91881c88a00e6fcdcfaea0ba2f1d0d7898f561810248a0b0531f5c463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_cf255011db3d3317a90105dbfd2a9638549ce975668ff606bf59f810bfb705f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf255011db3d3317a90105dbfd2a9638549ce975668ff606bf59f810bfb705f0->enter($__internal_cf255011db3d3317a90105dbfd2a9638549ce975668ff606bf59f810bfb705f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 285
        $context["force_error"] = true;
        // line 286
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_cf255011db3d3317a90105dbfd2a9638549ce975668ff606bf59f810bfb705f0->leave($__internal_cf255011db3d3317a90105dbfd2a9638549ce975668ff606bf59f810bfb705f0_prof);

        
        $__internal_95df34d91881c88a00e6fcdcfaea0ba2f1d0d7898f561810248a0b0531f5c463->leave($__internal_95df34d91881c88a00e6fcdcfaea0ba2f1d0d7898f561810248a0b0531f5c463_prof);

    }

    // line 289
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_ced36d1fb174eb38463b316a9df0e2010b23510a392ebb67182e4071e3811156 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ced36d1fb174eb38463b316a9df0e2010b23510a392ebb67182e4071e3811156->enter($__internal_ced36d1fb174eb38463b316a9df0e2010b23510a392ebb67182e4071e3811156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_f2204d61c6efddf54bec2832d91d019e011fd548890cce12872435c2971acc61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2204d61c6efddf54bec2832d91d019e011fd548890cce12872435c2971acc61->enter($__internal_f2204d61c6efddf54bec2832d91d019e011fd548890cce12872435c2971acc61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 290
        $context["force_error"] = true;
        // line 291
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_f2204d61c6efddf54bec2832d91d019e011fd548890cce12872435c2971acc61->leave($__internal_f2204d61c6efddf54bec2832d91d019e011fd548890cce12872435c2971acc61_prof);

        
        $__internal_ced36d1fb174eb38463b316a9df0e2010b23510a392ebb67182e4071e3811156->leave($__internal_ced36d1fb174eb38463b316a9df0e2010b23510a392ebb67182e4071e3811156_prof);

    }

    // line 294
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_3931ca60c85b36dbca53781cab5f0dc24dc95d5fa737696b84c5af4ac1c36c42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3931ca60c85b36dbca53781cab5f0dc24dc95d5fa737696b84c5af4ac1c36c42->enter($__internal_3931ca60c85b36dbca53781cab5f0dc24dc95d5fa737696b84c5af4ac1c36c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_32d888a2026f5569d02ae5307eba4c8f265952edc064dcb1797ed786963a20cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32d888a2026f5569d02ae5307eba4c8f265952edc064dcb1797ed786963a20cd->enter($__internal_32d888a2026f5569d02ae5307eba4c8f265952edc064dcb1797ed786963a20cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 295
        $context["force_error"] = true;
        // line 296
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_32d888a2026f5569d02ae5307eba4c8f265952edc064dcb1797ed786963a20cd->leave($__internal_32d888a2026f5569d02ae5307eba4c8f265952edc064dcb1797ed786963a20cd_prof);

        
        $__internal_3931ca60c85b36dbca53781cab5f0dc24dc95d5fa737696b84c5af4ac1c36c42->leave($__internal_3931ca60c85b36dbca53781cab5f0dc24dc95d5fa737696b84c5af4ac1c36c42_prof);

    }

    // line 299
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_d541916becbdbb257a281bceb3646f7e978cffdc1e158fa370f264908a5c395a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d541916becbdbb257a281bceb3646f7e978cffdc1e158fa370f264908a5c395a->enter($__internal_d541916becbdbb257a281bceb3646f7e978cffdc1e158fa370f264908a5c395a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_533b731b793fa461338248dcf49b01e5ce21450c090c62519ff383f43b4ab856 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_533b731b793fa461338248dcf49b01e5ce21450c090c62519ff383f43b4ab856->enter($__internal_533b731b793fa461338248dcf49b01e5ce21450c090c62519ff383f43b4ab856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 300
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 301
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 302
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 303
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_533b731b793fa461338248dcf49b01e5ce21450c090c62519ff383f43b4ab856->leave($__internal_533b731b793fa461338248dcf49b01e5ce21450c090c62519ff383f43b4ab856_prof);

        
        $__internal_d541916becbdbb257a281bceb3646f7e978cffdc1e158fa370f264908a5c395a->leave($__internal_d541916becbdbb257a281bceb3646f7e978cffdc1e158fa370f264908a5c395a_prof);

    }

    // line 308
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_ff7738b236b0c2c08ea22936b38b6b5e866b181b61a3fc260577295be4833227 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff7738b236b0c2c08ea22936b38b6b5e866b181b61a3fc260577295be4833227->enter($__internal_ff7738b236b0c2c08ea22936b38b6b5e866b181b61a3fc260577295be4833227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_c72a89675490aba765b43115285210d5aa840b639144df01a7351c9b602e5104 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c72a89675490aba765b43115285210d5aa840b639144df01a7351c9b602e5104->enter($__internal_c72a89675490aba765b43115285210d5aa840b639144df01a7351c9b602e5104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 309
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 310
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 311
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 312
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_c72a89675490aba765b43115285210d5aa840b639144df01a7351c9b602e5104->leave($__internal_c72a89675490aba765b43115285210d5aa840b639144df01a7351c9b602e5104_prof);

        
        $__internal_ff7738b236b0c2c08ea22936b38b6b5e866b181b61a3fc260577295be4833227->leave($__internal_ff7738b236b0c2c08ea22936b38b6b5e866b181b61a3fc260577295be4833227_prof);

    }

    // line 319
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_54ac411b6d1292159057f52f0504d1bd77ab60019af1535fff3badece77c2995 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54ac411b6d1292159057f52f0504d1bd77ab60019af1535fff3badece77c2995->enter($__internal_54ac411b6d1292159057f52f0504d1bd77ab60019af1535fff3badece77c2995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_3d3937bd0331f0e00428a52f76bb431c6744c19093609e04f5c072299a67a896 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d3937bd0331f0e00428a52f76bb431c6744c19093609e04f5c072299a67a896->enter($__internal_3d3937bd0331f0e00428a52f76bb431c6744c19093609e04f5c072299a67a896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 320
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 321
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "<small class=\"error\">";
            } else {
                echo "<div data-alert class=\"alert-box alert\">";
            }
            // line 322
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 323
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "
            ";
                // line 324
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 326
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "</small>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_3d3937bd0331f0e00428a52f76bb431c6744c19093609e04f5c072299a67a896->leave($__internal_3d3937bd0331f0e00428a52f76bb431c6744c19093609e04f5c072299a67a896_prof);

        
        $__internal_54ac411b6d1292159057f52f0504d1bd77ab60019af1535fff3badece77c2995->leave($__internal_54ac411b6d1292159057f52f0504d1bd77ab60019af1535fff3badece77c2995_prof);

    }

    public function getTemplateName()
    {
        return "foundation_5_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1078 => 326,  1062 => 324,  1058 => 323,  1041 => 322,  1035 => 321,  1033 => 320,  1024 => 319,  1011 => 312,  1007 => 311,  1001 => 310,  998 => 309,  989 => 308,  976 => 303,  972 => 302,  966 => 301,  963 => 300,  954 => 299,  943 => 296,  941 => 295,  932 => 294,  921 => 291,  919 => 290,  910 => 289,  899 => 286,  897 => 285,  888 => 284,  877 => 281,  875 => 280,  866 => 279,  853 => 274,  849 => 273,  845 => 272,  839 => 271,  836 => 270,  827 => 269,  815 => 263,  811 => 262,  795 => 261,  791 => 258,  788 => 255,  787 => 254,  786 => 253,  784 => 252,  781 => 251,  778 => 250,  775 => 249,  772 => 248,  769 => 247,  767 => 246,  764 => 245,  761 => 244,  758 => 243,  756 => 242,  747 => 241,  737 => 238,  728 => 237,  718 => 234,  709 => 233,  699 => 230,  696 => 229,  694 => 228,  691 => 227,  689 => 226,  687 => 225,  678 => 224,  668 => 221,  665 => 220,  663 => 219,  661 => 218,  652 => 217,  638 => 210,  635 => 209,  632 => 208,  630 => 207,  627 => 206,  621 => 204,  618 => 203,  616 => 202,  607 => 201,  593 => 196,  590 => 195,  584 => 193,  581 => 192,  578 => 191,  576 => 190,  573 => 189,  571 => 188,  562 => 187,  550 => 183,  543 => 181,  541 => 180,  539 => 179,  535 => 178,  530 => 177,  526 => 175,  519 => 173,  517 => 172,  515 => 171,  511 => 170,  508 => 169,  506 => 168,  497 => 167,  487 => 164,  485 => 163,  483 => 162,  477 => 159,  475 => 158,  473 => 157,  471 => 156,  469 => 155,  460 => 153,  458 => 152,  450 => 151,  447 => 149,  445 => 148,  442 => 147,  439 => 146,  437 => 145,  435 => 144,  432 => 143,  429 => 142,  427 => 141,  425 => 140,  416 => 139,  405 => 136,  401 => 134,  398 => 133,  390 => 128,  379 => 121,  371 => 116,  358 => 106,  347 => 99,  344 => 98,  338 => 96,  335 => 95,  332 => 94,  329 => 92,  327 => 91,  318 => 90,  307 => 87,  303 => 85,  301 => 84,  299 => 82,  298 => 81,  297 => 80,  296 => 79,  290 => 77,  287 => 76,  284 => 75,  281 => 73,  279 => 72,  270 => 71,  256 => 66,  252 => 65,  248 => 64,  243 => 62,  239 => 61,  236 => 60,  233 => 59,  230 => 57,  228 => 56,  219 => 55,  205 => 48,  203 => 47,  200 => 45,  191 => 44,  181 => 41,  175 => 38,  172 => 37,  170 => 36,  167 => 35,  165 => 34,  163 => 33,  157 => 30,  154 => 29,  151 => 28,  149 => 27,  146 => 26,  137 => 25,  127 => 22,  125 => 21,  116 => 20,  106 => 17,  103 => 16,  101 => 15,  99 => 14,  90 => 13,  80 => 10,  77 => 9,  75 => 8,  73 => 7,  64 => 6,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"form_div_layout.html.twig\" %}

{# Based on Foundation 5 Doc #}
{# Widgets #}

{% block form_widget_simple -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' button')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"row collapse\">
        {% set prepend = '{{' == money_pattern[0:2] %}
        {% if not prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        {% if prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        <div class=\"row\">
            <div class=\"large-7 columns\">{{ form_errors(form.date) }}</div>
            <div class=\"large-5 columns\">{{ form_errors(form.time) }}</div>
        </div>
        <div {{ block('widget_container_attributes') }}>
            <div class=\"large-7 columns\">{{ form_widget(form.date, { datetime: true } ) }}</div>
            <div class=\"large-5 columns\">{{ form_widget(form.time, { datetime: true } ) }}</div>
        </div>
    {% endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or not datetime %}
            <div {{ block('widget_container_attributes') }}>
        {% endif %}
        {{- date_pattern|replace({
            '{{ year }}': '<div class=\"large-4 columns\">' ~ form_widget(form.year) ~ '</div>',
            '{{ month }}': '<div class=\"large-4 columns\">' ~ form_widget(form.month) ~ '</div>',
            '{{ day }}': '<div class=\"large-4 columns\">' ~ form_widget(form.day) ~ '</div>',
        })|raw -}}
        {% if datetime is not defined or not datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or false == datetime %}
            <div {{ block('widget_container_attributes') -}}>
        {% endif %}
        {% if with_seconds %}
            <div class=\"large-4 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.second) }}
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"large-6 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
        {% endif %}
        {% if datetime is not defined or false == datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock time_widget %}

{% block choice_widget_collapsed -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}

    {% if multiple -%}
        {% set attr = attr|merge({style: (attr.style|default('') ~ ' height: auto; background-image: none;')|trim}) %}
    {% endif %}

    {% if required and placeholder is none and not placeholder_in_choices and not multiple -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\" data-customforms=\"disabled\"{% endif %}>
        {% if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain) }}</option>
        {%- endif %}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {% if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif %}
        {%- endif -%}
        {% set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') %}
        <ul class=\"inline-list\">
            {% for child in form %}
                <li>{{ form_widget(child, {
                        parent_label_class: label_attr.class|default(''),
                    }) }}</li>
            {% endfor %}
        </ul>
    {% else %}
        <div {{ block('widget_container_attributes') }}>
            {% for child in form %}
                {{ form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                }) }}
            {% endfor %}
        </div>
    {% endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if 'checkbox-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        <div class=\"checkbox\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if 'radio-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        {% if errors|length > 0 -%}
            {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
        {% endif %}
        <div class=\"radio\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {% set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) %}
    {{- block('form_label') -}}
{%- endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label -%}
    {% if required %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
    {% endif %}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if parent_label_class is defined %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ parent_label_class)|trim}) %}
    {% endif %}
    {% if label is empty %}
        {%- if label_format is not empty -%}
            {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
            }) %}
        {%- else -%}
            {% set label = name|humanize %}
        {%- endif -%}
    {% endif %}
    <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
        {{ widget|raw }}
        {{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}
    </label>
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if (not compound or force_error|default(false)) and not valid %} error{% endif %}\">
            {{ form_label(form) }}
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock form_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
        {% if form is not rootform %}<small class=\"error\">{% else %}<div data-alert class=\"alert-box alert\">{% endif %}
        {%- for error in errors -%}
            {{ error.message }}
            {% if not loop.last %}, {% endif %}
        {%- endfor -%}
        {% if form is not rootform %}</small>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "foundation_5_layout.html.twig", "/Users/Rachid/SymfonyProjects/esagdiplome/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/foundation_5_layout.html.twig");
    }
}
