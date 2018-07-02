<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_4f31d987113d9b97e43087e9883a313c22242810452a303f19e99699cbafbcc7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
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
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c56e63f06ed952421742f04aadae3743460c39fadda91744a68af1c2cc567f6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c56e63f06ed952421742f04aadae3743460c39fadda91744a68af1c2cc567f6e->enter($__internal_c56e63f06ed952421742f04aadae3743460c39fadda91744a68af1c2cc567f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_ef50b5c3b666ffedd7fa0e15ab6da3cafdb82338ba2e0649a4e3249001d9a072 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef50b5c3b666ffedd7fa0e15ab6da3cafdb82338ba2e0649a4e3249001d9a072->enter($__internal_ef50b5c3b666ffedd7fa0e15ab6da3cafdb82338ba2e0649a4e3249001d9a072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 39
        echo "
";
        // line 40
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 46
        echo "
";
        // line 47
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 60
        echo "
";
        // line 61
        $this->displayBlock('date_widget', $context, $blocks);
        // line 79
        echo "
";
        // line 80
        $this->displayBlock('time_widget', $context, $blocks);
        // line 95
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 133
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 137
        echo "
";
        // line 138
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 157
        echo "
";
        // line 158
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 168
        echo "
";
        // line 169
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 179
        echo "
";
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('form_label', $context, $blocks);
        // line 186
        echo "
";
        // line 187
        $this->displayBlock('choice_label', $context, $blocks);
        // line 192
        echo "
";
        // line 193
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 198
        echo "
";
        // line 199
        $this->displayBlock('radio_label', $context, $blocks);
        // line 204
        echo "
";
        // line 205
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 229
        echo "
";
        // line 231
        echo "
";
        // line 232
        $this->displayBlock('form_row', $context, $blocks);
        // line 239
        echo "
";
        // line 240
        $this->displayBlock('button_row', $context, $blocks);
        // line 245
        echo "
";
        // line 246
        $this->displayBlock('choice_row', $context, $blocks);
        // line 250
        echo "
";
        // line 251
        $this->displayBlock('date_row', $context, $blocks);
        // line 255
        echo "
";
        // line 256
        $this->displayBlock('time_row', $context, $blocks);
        // line 260
        echo "
";
        // line 261
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 265
        echo "
";
        // line 266
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 272
        echo "
";
        // line 273
        $this->displayBlock('radio_row', $context, $blocks);
        // line 279
        echo "
";
        // line 281
        echo "
";
        // line 282
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_c56e63f06ed952421742f04aadae3743460c39fadda91744a68af1c2cc567f6e->leave($__internal_c56e63f06ed952421742f04aadae3743460c39fadda91744a68af1c2cc567f6e_prof);

        
        $__internal_ef50b5c3b666ffedd7fa0e15ab6da3cafdb82338ba2e0649a4e3249001d9a072->leave($__internal_ef50b5c3b666ffedd7fa0e15ab6da3cafdb82338ba2e0649a4e3249001d9a072_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_a2e101d62b753f65b337da64eade3c86ce43cc089dfac845a45d46a34b50a9f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2e101d62b753f65b337da64eade3c86ce43cc089dfac845a45d46a34b50a9f0->enter($__internal_a2e101d62b753f65b337da64eade3c86ce43cc089dfac845a45d46a34b50a9f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_7c5f70ec75dd08ae717729d3bedec4a931f56e8becfc13702b641d7bc37fc250 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c5f70ec75dd08ae717729d3bedec4a931f56e8becfc13702b641d7bc37fc250->enter($__internal_7c5f70ec75dd08ae717729d3bedec4a931f56e8becfc13702b641d7bc37fc250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_7c5f70ec75dd08ae717729d3bedec4a931f56e8becfc13702b641d7bc37fc250->leave($__internal_7c5f70ec75dd08ae717729d3bedec4a931f56e8becfc13702b641d7bc37fc250_prof);

        
        $__internal_a2e101d62b753f65b337da64eade3c86ce43cc089dfac845a45d46a34b50a9f0->leave($__internal_a2e101d62b753f65b337da64eade3c86ce43cc089dfac845a45d46a34b50a9f0_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_e7e1420c3fcff740f088fe4bacb311c2a0f740d91194b756f978ae610dce7153 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7e1420c3fcff740f088fe4bacb311c2a0f740d91194b756f978ae610dce7153->enter($__internal_e7e1420c3fcff740f088fe4bacb311c2a0f740d91194b756f978ae610dce7153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_5e8c6f69c81de2fb03fd03d22eb3358793388552bfe40eb7c8ed3b2fb8312467 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e8c6f69c81de2fb03fd03d22eb3358793388552bfe40eb7c8ed3b2fb8312467->enter($__internal_5e8c6f69c81de2fb03fd03d22eb3358793388552bfe40eb7c8ed3b2fb8312467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_5e8c6f69c81de2fb03fd03d22eb3358793388552bfe40eb7c8ed3b2fb8312467->leave($__internal_5e8c6f69c81de2fb03fd03d22eb3358793388552bfe40eb7c8ed3b2fb8312467_prof);

        
        $__internal_e7e1420c3fcff740f088fe4bacb311c2a0f740d91194b756f978ae610dce7153->leave($__internal_e7e1420c3fcff740f088fe4bacb311c2a0f740d91194b756f978ae610dce7153_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_415b68a276d5c45fa1abc5c7fffd7ecce9c8d0ccff446bb8871e049206c3e8bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_415b68a276d5c45fa1abc5c7fffd7ecce9c8d0ccff446bb8871e049206c3e8bf->enter($__internal_415b68a276d5c45fa1abc5c7fffd7ecce9c8d0ccff446bb8871e049206c3e8bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_610a261ffa66b71854c2d85051dbf301be8a6fdfc5692bd2837d373d9f800f58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_610a261ffa66b71854c2d85051dbf301be8a6fdfc5692bd2837d373d9f800f58->enter($__internal_610a261ffa66b71854c2d85051dbf301be8a6fdfc5692bd2837d373d9f800f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_610a261ffa66b71854c2d85051dbf301be8a6fdfc5692bd2837d373d9f800f58->leave($__internal_610a261ffa66b71854c2d85051dbf301be8a6fdfc5692bd2837d373d9f800f58_prof);

        
        $__internal_415b68a276d5c45fa1abc5c7fffd7ecce9c8d0ccff446bb8871e049206c3e8bf->leave($__internal_415b68a276d5c45fa1abc5c7fffd7ecce9c8d0ccff446bb8871e049206c3e8bf_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_e51c23dee868ffe280acfcfbca5ef54e10d5586a5fd2d44456bb74ff3ce96518 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e51c23dee868ffe280acfcfbca5ef54e10d5586a5fd2d44456bb74ff3ce96518->enter($__internal_e51c23dee868ffe280acfcfbca5ef54e10d5586a5fd2d44456bb74ff3ce96518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_907817f22e30f8cf717b0344c7a5860dc6c0ac8ec2e7196b0c933bc0e5c999bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_907817f22e30f8cf717b0344c7a5860dc6c0ac8ec2e7196b0c933bc0e5c999bb->enter($__internal_907817f22e30f8cf717b0344c7a5860dc6c0ac8ec2e7196b0c933bc0e5c999bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        $context["prepend"] =  !(is_string($__internal_818a2aa7e278d116c0a0cd5ea32bcff1bfc87bd6f684898888dd607c6e21ed22 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_d160f2741346af44afdee7d0d6ae2f34a04a9e3747373461efcb547275757f57 = "{{") && ('' === $__internal_d160f2741346af44afdee7d0d6ae2f34a04a9e3747373461efcb547275757f57 || 0 === strpos($__internal_818a2aa7e278d116c0a0cd5ea32bcff1bfc87bd6f684898888dd607c6e21ed22, $__internal_d160f2741346af44afdee7d0d6ae2f34a04a9e3747373461efcb547275757f57)));
        // line 24
        echo "    ";
        $context["append"] =  !(is_string($__internal_c0d51562d30544ef45a3b29e5e80a6066dd641efb9b5e4e10186183885e27dad = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_5c5749747d9862b048362234b12f2771f26004c603dac67bd4bf8aaf74d8123c = "}}") && ('' === $__internal_5c5749747d9862b048362234b12f2771f26004c603dac67bd4bf8aaf74d8123c || $__internal_5c5749747d9862b048362234b12f2771f26004c603dac67bd4bf8aaf74d8123c === substr($__internal_c0d51562d30544ef45a3b29e5e80a6066dd641efb9b5e4e10186183885e27dad, -strlen($__internal_5c5749747d9862b048362234b12f2771f26004c603dac67bd4bf8aaf74d8123c))));
        // line 25
        echo "    ";
        if ((($context["prepend"] ?? $this->getContext($context, "prepend")) || ($context["append"] ?? $this->getContext($context, "append")))) {
            // line 26
            echo "        <div class=\"input-group\">
            ";
            // line 27
            if (($context["prepend"] ?? $this->getContext($context, "prepend"))) {
                // line 28
                echo "                <span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
                echo "</span>
            ";
            }
            // line 30
            $this->displayBlock("form_widget_simple", $context, $blocks);
            // line 31
            if (($context["append"] ?? $this->getContext($context, "append"))) {
                // line 32
                echo "                <span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
                echo "</span>
            ";
            }
            // line 34
            echo "        </div>
    ";
        } else {
            // line 36
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_907817f22e30f8cf717b0344c7a5860dc6c0ac8ec2e7196b0c933bc0e5c999bb->leave($__internal_907817f22e30f8cf717b0344c7a5860dc6c0ac8ec2e7196b0c933bc0e5c999bb_prof);

        
        $__internal_e51c23dee868ffe280acfcfbca5ef54e10d5586a5fd2d44456bb74ff3ce96518->leave($__internal_e51c23dee868ffe280acfcfbca5ef54e10d5586a5fd2d44456bb74ff3ce96518_prof);

    }

    // line 40
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_80c71c40de00ef39398a70dd6453d0afc5eaad1387de9115f7883cdbec665ddc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80c71c40de00ef39398a70dd6453d0afc5eaad1387de9115f7883cdbec665ddc->enter($__internal_80c71c40de00ef39398a70dd6453d0afc5eaad1387de9115f7883cdbec665ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_2827f2fd28de3b4141f74cb9c777fad27e3d5606a672e074af0033798c0c32e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2827f2fd28de3b4141f74cb9c777fad27e3d5606a672e074af0033798c0c32e5->enter($__internal_2827f2fd28de3b4141f74cb9c777fad27e3d5606a672e074af0033798c0c32e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 41
        echo "<div class=\"input-group\">";
        // line 42
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 43
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_2827f2fd28de3b4141f74cb9c777fad27e3d5606a672e074af0033798c0c32e5->leave($__internal_2827f2fd28de3b4141f74cb9c777fad27e3d5606a672e074af0033798c0c32e5_prof);

        
        $__internal_80c71c40de00ef39398a70dd6453d0afc5eaad1387de9115f7883cdbec665ddc->leave($__internal_80c71c40de00ef39398a70dd6453d0afc5eaad1387de9115f7883cdbec665ddc_prof);

    }

    // line 47
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_ee3bb9c660152f5a9d82800a6706900fd98dbd0619e69edbdde6550ac6773b10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee3bb9c660152f5a9d82800a6706900fd98dbd0619e69edbdde6550ac6773b10->enter($__internal_ee3bb9c660152f5a9d82800a6706900fd98dbd0619e69edbdde6550ac6773b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_d6396441e2262719dbde58e729aa3b67e8a52d97c2bbbf10f8f49ba0a073cd63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6396441e2262719dbde58e729aa3b67e8a52d97c2bbbf10f8f49ba0a073cd63->enter($__internal_d6396441e2262719dbde58e729aa3b67e8a52d97c2bbbf10f8f49ba0a073cd63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 48
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 49
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 51
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 52
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 53
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 54
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 55
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 56
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 57
            echo "</div>";
        }
        
        $__internal_d6396441e2262719dbde58e729aa3b67e8a52d97c2bbbf10f8f49ba0a073cd63->leave($__internal_d6396441e2262719dbde58e729aa3b67e8a52d97c2bbbf10f8f49ba0a073cd63_prof);

        
        $__internal_ee3bb9c660152f5a9d82800a6706900fd98dbd0619e69edbdde6550ac6773b10->leave($__internal_ee3bb9c660152f5a9d82800a6706900fd98dbd0619e69edbdde6550ac6773b10_prof);

    }

    // line 61
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_2856aeadb73a28fa3877a198d38e3513fb12ffc8b088d17f70293d52d86c1288 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2856aeadb73a28fa3877a198d38e3513fb12ffc8b088d17f70293d52d86c1288->enter($__internal_2856aeadb73a28fa3877a198d38e3513fb12ffc8b088d17f70293d52d86c1288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_c645537a8711fde83af6b73dbbcd8368f7b2900a64eac40e8b2e069f6642af1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c645537a8711fde83af6b73dbbcd8368f7b2900a64eac40e8b2e069f6642af1a->enter($__internal_c645537a8711fde83af6b73dbbcd8368f7b2900a64eac40e8b2e069f6642af1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 62
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 63
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 65
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 66
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 67
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 69
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 70
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 71
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 72
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 74
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 75
                echo "</div>";
            }
        }
        
        $__internal_c645537a8711fde83af6b73dbbcd8368f7b2900a64eac40e8b2e069f6642af1a->leave($__internal_c645537a8711fde83af6b73dbbcd8368f7b2900a64eac40e8b2e069f6642af1a_prof);

        
        $__internal_2856aeadb73a28fa3877a198d38e3513fb12ffc8b088d17f70293d52d86c1288->leave($__internal_2856aeadb73a28fa3877a198d38e3513fb12ffc8b088d17f70293d52d86c1288_prof);

    }

    // line 80
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_800d994f27f961d41d5b5870b03d6e116832620494cd475e37cd8090287d3316 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_800d994f27f961d41d5b5870b03d6e116832620494cd475e37cd8090287d3316->enter($__internal_800d994f27f961d41d5b5870b03d6e116832620494cd475e37cd8090287d3316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_57df9ee966fa3d2a5a054c0ac6bf8455726c91ed78d83069e26f98b2e4bdf33a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57df9ee966fa3d2a5a054c0ac6bf8455726c91ed78d83069e26f98b2e4bdf33a->enter($__internal_57df9ee966fa3d2a5a054c0ac6bf8455726c91ed78d83069e26f98b2e4bdf33a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 81
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 82
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 84
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 85
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 86
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 88
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 89
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 90
                echo "</div>";
            }
        }
        
        $__internal_57df9ee966fa3d2a5a054c0ac6bf8455726c91ed78d83069e26f98b2e4bdf33a->leave($__internal_57df9ee966fa3d2a5a054c0ac6bf8455726c91ed78d83069e26f98b2e4bdf33a_prof);

        
        $__internal_800d994f27f961d41d5b5870b03d6e116832620494cd475e37cd8090287d3316->leave($__internal_800d994f27f961d41d5b5870b03d6e116832620494cd475e37cd8090287d3316_prof);

    }

    // line 95
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_db9a9f2d0ad9b7d8070e9c37083c60378c97f74f51d68eb8a420d4262de5c7b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db9a9f2d0ad9b7d8070e9c37083c60378c97f74f51d68eb8a420d4262de5c7b8->enter($__internal_db9a9f2d0ad9b7d8070e9c37083c60378c97f74f51d68eb8a420d4262de5c7b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_4c08198d8234bd9a41d838ecce39494ac56c4e423ba9030924cb1b38f0394851 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c08198d8234bd9a41d838ecce39494ac56c4e423ba9030924cb1b38f0394851->enter($__internal_4c08198d8234bd9a41d838ecce39494ac56c4e423ba9030924cb1b38f0394851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 96
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 97
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 99
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 100
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 101
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 102
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 103
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter(($context["table_class"] ?? $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 106
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 107
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 108
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 109
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 110
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 111
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 112
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 113
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 117
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 118
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 119
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 120
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 121
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 122
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 123
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 124
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 128
            if (($context["with_invert"] ?? $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 129
            echo "</div>";
        }
        
        $__internal_4c08198d8234bd9a41d838ecce39494ac56c4e423ba9030924cb1b38f0394851->leave($__internal_4c08198d8234bd9a41d838ecce39494ac56c4e423ba9030924cb1b38f0394851_prof);

        
        $__internal_db9a9f2d0ad9b7d8070e9c37083c60378c97f74f51d68eb8a420d4262de5c7b8->leave($__internal_db9a9f2d0ad9b7d8070e9c37083c60378c97f74f51d68eb8a420d4262de5c7b8_prof);

    }

    // line 133
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_c4815b81418ce0f993632277c38199ee935928482b1fba5c212ed9a616954254 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4815b81418ce0f993632277c38199ee935928482b1fba5c212ed9a616954254->enter($__internal_c4815b81418ce0f993632277c38199ee935928482b1fba5c212ed9a616954254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_535c5963191bd288b7b21dd87090f9bd0807da67328cde2e4da80c630ed675a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_535c5963191bd288b7b21dd87090f9bd0807da67328cde2e4da80c630ed675a4->enter($__internal_535c5963191bd288b7b21dd87090f9bd0807da67328cde2e4da80c630ed675a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 134
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 135
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_535c5963191bd288b7b21dd87090f9bd0807da67328cde2e4da80c630ed675a4->leave($__internal_535c5963191bd288b7b21dd87090f9bd0807da67328cde2e4da80c630ed675a4_prof);

        
        $__internal_c4815b81418ce0f993632277c38199ee935928482b1fba5c212ed9a616954254->leave($__internal_c4815b81418ce0f993632277c38199ee935928482b1fba5c212ed9a616954254_prof);

    }

    // line 138
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_e023f87ebb99f1c836035a97b06f28f5cf7131985c5d029571a7c4701aa1f125 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e023f87ebb99f1c836035a97b06f28f5cf7131985c5d029571a7c4701aa1f125->enter($__internal_e023f87ebb99f1c836035a97b06f28f5cf7131985c5d029571a7c4701aa1f125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_9d3bb171b2af0f7e11600a2ad88974de0a5e3481fa64f8fba0431fb877d7a9ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d3bb171b2af0f7e11600a2ad88974de0a5e3481fa64f8fba0431fb877d7a9ed->enter($__internal_9d3bb171b2af0f7e11600a2ad88974de0a5e3481fa64f8fba0431fb877d7a9ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 139
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 140
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 141
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 142
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 143
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 147
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 148
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 149
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 150
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 151
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 154
            echo "</div>";
        }
        
        $__internal_9d3bb171b2af0f7e11600a2ad88974de0a5e3481fa64f8fba0431fb877d7a9ed->leave($__internal_9d3bb171b2af0f7e11600a2ad88974de0a5e3481fa64f8fba0431fb877d7a9ed_prof);

        
        $__internal_e023f87ebb99f1c836035a97b06f28f5cf7131985c5d029571a7c4701aa1f125->leave($__internal_e023f87ebb99f1c836035a97b06f28f5cf7131985c5d029571a7c4701aa1f125_prof);

    }

    // line 158
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_c9f094027630c6d7948eaef8e65bf7d8178aa109a8262926eae2577e7c187e9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9f094027630c6d7948eaef8e65bf7d8178aa109a8262926eae2577e7c187e9c->enter($__internal_c9f094027630c6d7948eaef8e65bf7d8178aa109a8262926eae2577e7c187e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_6fc0ed8352c9203357200e0170a1ae86b22125706aef398ca11654b954b3d415 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fc0ed8352c9203357200e0170a1ae86b22125706aef398ca11654b954b3d415->enter($__internal_6fc0ed8352c9203357200e0170a1ae86b22125706aef398ca11654b954b3d415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 159
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 160
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 161
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 163
            echo "<div class=\"checkbox\">";
            // line 164
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 165
            echo "</div>";
        }
        
        $__internal_6fc0ed8352c9203357200e0170a1ae86b22125706aef398ca11654b954b3d415->leave($__internal_6fc0ed8352c9203357200e0170a1ae86b22125706aef398ca11654b954b3d415_prof);

        
        $__internal_c9f094027630c6d7948eaef8e65bf7d8178aa109a8262926eae2577e7c187e9c->leave($__internal_c9f094027630c6d7948eaef8e65bf7d8178aa109a8262926eae2577e7c187e9c_prof);

    }

    // line 169
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_13df222b9c4a7996458db08675fcdc460488c59ab33728bbb3c5dca0f8eef0c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13df222b9c4a7996458db08675fcdc460488c59ab33728bbb3c5dca0f8eef0c3->enter($__internal_13df222b9c4a7996458db08675fcdc460488c59ab33728bbb3c5dca0f8eef0c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_e707efbb1b814cd6a8e6d3bb4a64ce78d56bc3f7b34d04c7eaf44aafff674c5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e707efbb1b814cd6a8e6d3bb4a64ce78d56bc3f7b34d04c7eaf44aafff674c5c->enter($__internal_e707efbb1b814cd6a8e6d3bb4a64ce78d56bc3f7b34d04c7eaf44aafff674c5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 170
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 171
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 172
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 174
            echo "<div class=\"radio\">";
            // line 175
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 176
            echo "</div>";
        }
        
        $__internal_e707efbb1b814cd6a8e6d3bb4a64ce78d56bc3f7b34d04c7eaf44aafff674c5c->leave($__internal_e707efbb1b814cd6a8e6d3bb4a64ce78d56bc3f7b34d04c7eaf44aafff674c5c_prof);

        
        $__internal_13df222b9c4a7996458db08675fcdc460488c59ab33728bbb3c5dca0f8eef0c3->leave($__internal_13df222b9c4a7996458db08675fcdc460488c59ab33728bbb3c5dca0f8eef0c3_prof);

    }

    // line 182
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_a6220753dbabdce297ca0544bab548a2a52c262b3551bb1f2d9c4a59b9b103cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6220753dbabdce297ca0544bab548a2a52c262b3551bb1f2d9c4a59b9b103cc->enter($__internal_a6220753dbabdce297ca0544bab548a2a52c262b3551bb1f2d9c4a59b9b103cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_193e01a61bb502072397024512c1f664013f37595075668f21b5dd95656976bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_193e01a61bb502072397024512c1f664013f37595075668f21b5dd95656976bf->enter($__internal_193e01a61bb502072397024512c1f664013f37595075668f21b5dd95656976bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 183
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 184
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_193e01a61bb502072397024512c1f664013f37595075668f21b5dd95656976bf->leave($__internal_193e01a61bb502072397024512c1f664013f37595075668f21b5dd95656976bf_prof);

        
        $__internal_a6220753dbabdce297ca0544bab548a2a52c262b3551bb1f2d9c4a59b9b103cc->leave($__internal_a6220753dbabdce297ca0544bab548a2a52c262b3551bb1f2d9c4a59b9b103cc_prof);

    }

    // line 187
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_ca74c208175692986557e41efccf493c9425aecf8b2f47a5fed98ed2176e8a5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca74c208175692986557e41efccf493c9425aecf8b2f47a5fed98ed2176e8a5b->enter($__internal_ca74c208175692986557e41efccf493c9425aecf8b2f47a5fed98ed2176e8a5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_59f3af08513585cdbb8a7d9994ff6464dfed6fda44a2f0fbf71ce6e864e625e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59f3af08513585cdbb8a7d9994ff6464dfed6fda44a2f0fbf71ce6e864e625e8->enter($__internal_59f3af08513585cdbb8a7d9994ff6464dfed6fda44a2f0fbf71ce6e864e625e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 189
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 190
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_59f3af08513585cdbb8a7d9994ff6464dfed6fda44a2f0fbf71ce6e864e625e8->leave($__internal_59f3af08513585cdbb8a7d9994ff6464dfed6fda44a2f0fbf71ce6e864e625e8_prof);

        
        $__internal_ca74c208175692986557e41efccf493c9425aecf8b2f47a5fed98ed2176e8a5b->leave($__internal_ca74c208175692986557e41efccf493c9425aecf8b2f47a5fed98ed2176e8a5b_prof);

    }

    // line 193
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_63ca1c6eefc66b198c9231d5ab73bd10d56da6dd5aa01dc9e3ed0c256b9faf24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63ca1c6eefc66b198c9231d5ab73bd10d56da6dd5aa01dc9e3ed0c256b9faf24->enter($__internal_63ca1c6eefc66b198c9231d5ab73bd10d56da6dd5aa01dc9e3ed0c256b9faf24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_a4c875057a096c17434a0ee9f629d81abb5e1f81da5939675100f6302ae6959c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4c875057a096c17434a0ee9f629d81abb5e1f81da5939675100f6302ae6959c->enter($__internal_a4c875057a096c17434a0ee9f629d81abb5e1f81da5939675100f6302ae6959c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 194
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 196
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_a4c875057a096c17434a0ee9f629d81abb5e1f81da5939675100f6302ae6959c->leave($__internal_a4c875057a096c17434a0ee9f629d81abb5e1f81da5939675100f6302ae6959c_prof);

        
        $__internal_63ca1c6eefc66b198c9231d5ab73bd10d56da6dd5aa01dc9e3ed0c256b9faf24->leave($__internal_63ca1c6eefc66b198c9231d5ab73bd10d56da6dd5aa01dc9e3ed0c256b9faf24_prof);

    }

    // line 199
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_85da187c6ca61d45d749bf3703cd47207f37f0adde9ee582917d75a0f4de7e95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85da187c6ca61d45d749bf3703cd47207f37f0adde9ee582917d75a0f4de7e95->enter($__internal_85da187c6ca61d45d749bf3703cd47207f37f0adde9ee582917d75a0f4de7e95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_7d7d823eee9d4cf085f330b197c47f425d33392f3377d2d78cc9f1aca6aaae06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d7d823eee9d4cf085f330b197c47f425d33392f3377d2d78cc9f1aca6aaae06->enter($__internal_7d7d823eee9d4cf085f330b197c47f425d33392f3377d2d78cc9f1aca6aaae06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 200
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 202
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_7d7d823eee9d4cf085f330b197c47f425d33392f3377d2d78cc9f1aca6aaae06->leave($__internal_7d7d823eee9d4cf085f330b197c47f425d33392f3377d2d78cc9f1aca6aaae06_prof);

        
        $__internal_85da187c6ca61d45d749bf3703cd47207f37f0adde9ee582917d75a0f4de7e95->leave($__internal_85da187c6ca61d45d749bf3703cd47207f37f0adde9ee582917d75a0f4de7e95_prof);

    }

    // line 205
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_d70c7a120beea5e753dbe2bff871ccc0c9950345f80bb78ec078adc379b946c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d70c7a120beea5e753dbe2bff871ccc0c9950345f80bb78ec078adc379b946c0->enter($__internal_d70c7a120beea5e753dbe2bff871ccc0c9950345f80bb78ec078adc379b946c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_c194f57f9f7ede3c4044fd999faeb0675da094d482e9f660d72a48f647a5e003 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c194f57f9f7ede3c4044fd999faeb0675da094d482e9f660d72a48f647a5e003->enter($__internal_c194f57f9f7ede3c4044fd999faeb0675da094d482e9f660d72a48f647a5e003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 206
        echo "    ";
        // line 207
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 208
            echo "        ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 209
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 210
                echo "        ";
            }
            // line 211
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 212
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
                // line 213
                echo "        ";
            }
            // line 214
            echo "        ";
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 215
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 216
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 217
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 218
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 221
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 224
            echo "        <label";
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
            // line 225
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 226
            echo "</label>
    ";
        }
        
        $__internal_c194f57f9f7ede3c4044fd999faeb0675da094d482e9f660d72a48f647a5e003->leave($__internal_c194f57f9f7ede3c4044fd999faeb0675da094d482e9f660d72a48f647a5e003_prof);

        
        $__internal_d70c7a120beea5e753dbe2bff871ccc0c9950345f80bb78ec078adc379b946c0->leave($__internal_d70c7a120beea5e753dbe2bff871ccc0c9950345f80bb78ec078adc379b946c0_prof);

    }

    // line 232
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_497d7712808bffe3be58d221e708b44c4edc1d05d8cb282a4ff4aac2f986813f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_497d7712808bffe3be58d221e708b44c4edc1d05d8cb282a4ff4aac2f986813f->enter($__internal_497d7712808bffe3be58d221e708b44c4edc1d05d8cb282a4ff4aac2f986813f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_e53f5529587495437fc434e4bfdb3b30253e7ad06c2a215b36a87a9291730247 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e53f5529587495437fc434e4bfdb3b30253e7ad06c2a215b36a87a9291730247->enter($__internal_e53f5529587495437fc434e4bfdb3b30253e7ad06c2a215b36a87a9291730247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 233
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 234
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 235
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 236
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 237
        echo "</div>";
        
        $__internal_e53f5529587495437fc434e4bfdb3b30253e7ad06c2a215b36a87a9291730247->leave($__internal_e53f5529587495437fc434e4bfdb3b30253e7ad06c2a215b36a87a9291730247_prof);

        
        $__internal_497d7712808bffe3be58d221e708b44c4edc1d05d8cb282a4ff4aac2f986813f->leave($__internal_497d7712808bffe3be58d221e708b44c4edc1d05d8cb282a4ff4aac2f986813f_prof);

    }

    // line 240
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_62e6add5ac4a74717f660e5d43bd47fd277415c088414a78521fcb165781fb19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62e6add5ac4a74717f660e5d43bd47fd277415c088414a78521fcb165781fb19->enter($__internal_62e6add5ac4a74717f660e5d43bd47fd277415c088414a78521fcb165781fb19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_da0495b638c7bb307003f70c3e5916d07304893ab91f87ac991e7b3de19ff8b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da0495b638c7bb307003f70c3e5916d07304893ab91f87ac991e7b3de19ff8b0->enter($__internal_da0495b638c7bb307003f70c3e5916d07304893ab91f87ac991e7b3de19ff8b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 241
        echo "<div class=\"form-group\">";
        // line 242
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 243
        echo "</div>";
        
        $__internal_da0495b638c7bb307003f70c3e5916d07304893ab91f87ac991e7b3de19ff8b0->leave($__internal_da0495b638c7bb307003f70c3e5916d07304893ab91f87ac991e7b3de19ff8b0_prof);

        
        $__internal_62e6add5ac4a74717f660e5d43bd47fd277415c088414a78521fcb165781fb19->leave($__internal_62e6add5ac4a74717f660e5d43bd47fd277415c088414a78521fcb165781fb19_prof);

    }

    // line 246
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_addc6e7e5178b79f9f4400d443c73c230802d1573155722ab8a12dd80bc4fb29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_addc6e7e5178b79f9f4400d443c73c230802d1573155722ab8a12dd80bc4fb29->enter($__internal_addc6e7e5178b79f9f4400d443c73c230802d1573155722ab8a12dd80bc4fb29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_54c17ecd7337c2aea5dfb8d91ba97c593832330f4d7028ccda46f7f58c5a5f7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54c17ecd7337c2aea5dfb8d91ba97c593832330f4d7028ccda46f7f58c5a5f7c->enter($__internal_54c17ecd7337c2aea5dfb8d91ba97c593832330f4d7028ccda46f7f58c5a5f7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 247
        $context["force_error"] = true;
        // line 248
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_54c17ecd7337c2aea5dfb8d91ba97c593832330f4d7028ccda46f7f58c5a5f7c->leave($__internal_54c17ecd7337c2aea5dfb8d91ba97c593832330f4d7028ccda46f7f58c5a5f7c_prof);

        
        $__internal_addc6e7e5178b79f9f4400d443c73c230802d1573155722ab8a12dd80bc4fb29->leave($__internal_addc6e7e5178b79f9f4400d443c73c230802d1573155722ab8a12dd80bc4fb29_prof);

    }

    // line 251
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_9103093c48710bb6f275f16a203805d67f38d850d173701faba2ef9d9259e3a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9103093c48710bb6f275f16a203805d67f38d850d173701faba2ef9d9259e3a9->enter($__internal_9103093c48710bb6f275f16a203805d67f38d850d173701faba2ef9d9259e3a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_e1a849abda7567ee614fe8039b11437c96b5b25c2243fddc60d32e1e47f4f176 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1a849abda7567ee614fe8039b11437c96b5b25c2243fddc60d32e1e47f4f176->enter($__internal_e1a849abda7567ee614fe8039b11437c96b5b25c2243fddc60d32e1e47f4f176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 252
        $context["force_error"] = true;
        // line 253
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_e1a849abda7567ee614fe8039b11437c96b5b25c2243fddc60d32e1e47f4f176->leave($__internal_e1a849abda7567ee614fe8039b11437c96b5b25c2243fddc60d32e1e47f4f176_prof);

        
        $__internal_9103093c48710bb6f275f16a203805d67f38d850d173701faba2ef9d9259e3a9->leave($__internal_9103093c48710bb6f275f16a203805d67f38d850d173701faba2ef9d9259e3a9_prof);

    }

    // line 256
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_b2adaf67abe166de99070c6aa6040ec70c7cce7fc4a33c9da5da4b0f2a33e058 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2adaf67abe166de99070c6aa6040ec70c7cce7fc4a33c9da5da4b0f2a33e058->enter($__internal_b2adaf67abe166de99070c6aa6040ec70c7cce7fc4a33c9da5da4b0f2a33e058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_179413a63820e3c2ec431579266834b4796812cfb4d16a6a7d3bfed894bfb169 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_179413a63820e3c2ec431579266834b4796812cfb4d16a6a7d3bfed894bfb169->enter($__internal_179413a63820e3c2ec431579266834b4796812cfb4d16a6a7d3bfed894bfb169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 257
        $context["force_error"] = true;
        // line 258
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_179413a63820e3c2ec431579266834b4796812cfb4d16a6a7d3bfed894bfb169->leave($__internal_179413a63820e3c2ec431579266834b4796812cfb4d16a6a7d3bfed894bfb169_prof);

        
        $__internal_b2adaf67abe166de99070c6aa6040ec70c7cce7fc4a33c9da5da4b0f2a33e058->leave($__internal_b2adaf67abe166de99070c6aa6040ec70c7cce7fc4a33c9da5da4b0f2a33e058_prof);

    }

    // line 261
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_3e7bdb0c868d3b5f421e2d6cf9c3a5432e678db41b2cbd8d51f1c76dec77ae2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e7bdb0c868d3b5f421e2d6cf9c3a5432e678db41b2cbd8d51f1c76dec77ae2a->enter($__internal_3e7bdb0c868d3b5f421e2d6cf9c3a5432e678db41b2cbd8d51f1c76dec77ae2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_40fb7cd69ba0935cdc3fa4be258fcdb7fc02e8236446e7bc29265de09d7b8a28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40fb7cd69ba0935cdc3fa4be258fcdb7fc02e8236446e7bc29265de09d7b8a28->enter($__internal_40fb7cd69ba0935cdc3fa4be258fcdb7fc02e8236446e7bc29265de09d7b8a28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 262
        $context["force_error"] = true;
        // line 263
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_40fb7cd69ba0935cdc3fa4be258fcdb7fc02e8236446e7bc29265de09d7b8a28->leave($__internal_40fb7cd69ba0935cdc3fa4be258fcdb7fc02e8236446e7bc29265de09d7b8a28_prof);

        
        $__internal_3e7bdb0c868d3b5f421e2d6cf9c3a5432e678db41b2cbd8d51f1c76dec77ae2a->leave($__internal_3e7bdb0c868d3b5f421e2d6cf9c3a5432e678db41b2cbd8d51f1c76dec77ae2a_prof);

    }

    // line 266
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_9b604b02362e67eec46146bfff023a15657df7d8bbe3836fdbd13ec75d25c873 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b604b02362e67eec46146bfff023a15657df7d8bbe3836fdbd13ec75d25c873->enter($__internal_9b604b02362e67eec46146bfff023a15657df7d8bbe3836fdbd13ec75d25c873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_ae840430c68bb15b2cc3dbd2a9a6888de6311471eff1b0e30eea66546f12160c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae840430c68bb15b2cc3dbd2a9a6888de6311471eff1b0e30eea66546f12160c->enter($__internal_ae840430c68bb15b2cc3dbd2a9a6888de6311471eff1b0e30eea66546f12160c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 267
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 268
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 269
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 270
        echo "</div>";
        
        $__internal_ae840430c68bb15b2cc3dbd2a9a6888de6311471eff1b0e30eea66546f12160c->leave($__internal_ae840430c68bb15b2cc3dbd2a9a6888de6311471eff1b0e30eea66546f12160c_prof);

        
        $__internal_9b604b02362e67eec46146bfff023a15657df7d8bbe3836fdbd13ec75d25c873->leave($__internal_9b604b02362e67eec46146bfff023a15657df7d8bbe3836fdbd13ec75d25c873_prof);

    }

    // line 273
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_4197d5f14a4185c364a57533988ca10a49e87cdfe4a2393ef6a0ad3852c627a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4197d5f14a4185c364a57533988ca10a49e87cdfe4a2393ef6a0ad3852c627a0->enter($__internal_4197d5f14a4185c364a57533988ca10a49e87cdfe4a2393ef6a0ad3852c627a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_bd481707cd6a7293a51cd4e959641372cc50a4d842c865147a986849b67c3667 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd481707cd6a7293a51cd4e959641372cc50a4d842c865147a986849b67c3667->enter($__internal_bd481707cd6a7293a51cd4e959641372cc50a4d842c865147a986849b67c3667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 274
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 275
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 276
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 277
        echo "</div>";
        
        $__internal_bd481707cd6a7293a51cd4e959641372cc50a4d842c865147a986849b67c3667->leave($__internal_bd481707cd6a7293a51cd4e959641372cc50a4d842c865147a986849b67c3667_prof);

        
        $__internal_4197d5f14a4185c364a57533988ca10a49e87cdfe4a2393ef6a0ad3852c627a0->leave($__internal_4197d5f14a4185c364a57533988ca10a49e87cdfe4a2393ef6a0ad3852c627a0_prof);

    }

    // line 282
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_9c7377a01781b2d89a75a27cd23912d4e91beeddcb24b0ddf4479f37f6c46e08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c7377a01781b2d89a75a27cd23912d4e91beeddcb24b0ddf4479f37f6c46e08->enter($__internal_9c7377a01781b2d89a75a27cd23912d4e91beeddcb24b0ddf4479f37f6c46e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_755ee48ba437143dc01201d5889844bef67864f448f8ae3e737073617a377c87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_755ee48ba437143dc01201d5889844bef67864f448f8ae3e737073617a377c87->enter($__internal_755ee48ba437143dc01201d5889844bef67864f448f8ae3e737073617a377c87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 283
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 284
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 285
            echo "    <ul class=\"list-unstyled\">";
            // line 286
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 287
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 289
            echo "</ul>
    ";
            // line 290
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_755ee48ba437143dc01201d5889844bef67864f448f8ae3e737073617a377c87->leave($__internal_755ee48ba437143dc01201d5889844bef67864f448f8ae3e737073617a377c87_prof);

        
        $__internal_9c7377a01781b2d89a75a27cd23912d4e91beeddcb24b0ddf4479f37f6c46e08->leave($__internal_9c7377a01781b2d89a75a27cd23912d4e91beeddcb24b0ddf4479f37f6c46e08_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1149 => 290,  1146 => 289,  1138 => 287,  1134 => 286,  1132 => 285,  1126 => 284,  1124 => 283,  1115 => 282,  1105 => 277,  1103 => 276,  1101 => 275,  1095 => 274,  1086 => 273,  1076 => 270,  1074 => 269,  1072 => 268,  1066 => 267,  1057 => 266,  1047 => 263,  1045 => 262,  1036 => 261,  1026 => 258,  1024 => 257,  1015 => 256,  1005 => 253,  1003 => 252,  994 => 251,  984 => 248,  982 => 247,  973 => 246,  963 => 243,  961 => 242,  959 => 241,  950 => 240,  940 => 237,  938 => 236,  936 => 235,  934 => 234,  928 => 233,  919 => 232,  907 => 226,  903 => 225,  888 => 224,  884 => 221,  881 => 218,  880 => 217,  879 => 216,  877 => 215,  874 => 214,  871 => 213,  868 => 212,  865 => 211,  862 => 210,  859 => 209,  856 => 208,  853 => 207,  851 => 206,  842 => 205,  832 => 202,  830 => 200,  821 => 199,  811 => 196,  809 => 194,  800 => 193,  790 => 190,  788 => 189,  779 => 187,  769 => 184,  767 => 183,  758 => 182,  747 => 176,  745 => 175,  743 => 174,  740 => 172,  738 => 171,  736 => 170,  727 => 169,  716 => 165,  714 => 164,  712 => 163,  709 => 161,  707 => 160,  705 => 159,  696 => 158,  685 => 154,  679 => 151,  678 => 150,  677 => 149,  673 => 148,  669 => 147,  662 => 143,  661 => 142,  660 => 141,  656 => 140,  654 => 139,  645 => 138,  635 => 135,  633 => 134,  624 => 133,  613 => 129,  609 => 128,  604 => 124,  598 => 123,  592 => 122,  586 => 121,  580 => 120,  574 => 119,  568 => 118,  562 => 117,  557 => 113,  551 => 112,  545 => 111,  539 => 110,  533 => 109,  527 => 108,  521 => 107,  515 => 106,  510 => 103,  507 => 102,  505 => 101,  501 => 100,  499 => 99,  496 => 97,  494 => 96,  485 => 95,  473 => 90,  470 => 89,  460 => 88,  455 => 86,  453 => 85,  451 => 84,  448 => 82,  446 => 81,  437 => 80,  425 => 75,  423 => 74,  421 => 72,  420 => 71,  419 => 70,  418 => 69,  413 => 67,  411 => 66,  409 => 65,  406 => 63,  404 => 62,  395 => 61,  384 => 57,  382 => 56,  380 => 55,  378 => 54,  376 => 53,  372 => 52,  370 => 51,  367 => 49,  365 => 48,  356 => 47,  345 => 43,  343 => 42,  341 => 41,  332 => 40,  321 => 36,  317 => 34,  311 => 32,  309 => 31,  307 => 30,  301 => 28,  299 => 27,  296 => 26,  293 => 25,  290 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 282,  200 => 281,  197 => 279,  195 => 273,  192 => 272,  190 => 266,  187 => 265,  185 => 261,  182 => 260,  180 => 256,  177 => 255,  175 => 251,  172 => 250,  170 => 246,  167 => 245,  165 => 240,  162 => 239,  160 => 232,  157 => 231,  154 => 229,  152 => 205,  149 => 204,  147 => 199,  144 => 198,  142 => 193,  139 => 192,  137 => 187,  134 => 186,  132 => 182,  129 => 181,  126 => 179,  124 => 169,  121 => 168,  119 => 158,  116 => 157,  114 => 138,  111 => 137,  109 => 133,  107 => 95,  105 => 80,  102 => 79,  100 => 61,  97 => 60,  95 => 47,  92 => 46,  90 => 40,  87 => 39,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
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

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    {% set prepend = not (money_pattern starts with '{{') %}
    {% set append = not (money_pattern ends with '}}') %}
    {% if prepend or append %}
        <div class=\"input-group\">
            {% if prepend %}
                <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            {% endif %}
            {{- block('form_widget_simple') -}}
            {% if append %}
                <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            {% endif %}
        </div>
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <div class=\"table-responsive\">
                <table class=\"table {{ table_class|default('table-bordered table-condensed table-striped') }}\">
                    <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                    </tbody>
                </table>
            </div>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
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
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form is not rootform %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form is not rootform %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "/Users/Rachid/SymfonyProjects/esagdiplome/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
