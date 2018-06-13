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
        $__internal_db0e96e35e3f17762808ebc44d5ce7d7906480927a91f29e0659c1cbffebf5cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db0e96e35e3f17762808ebc44d5ce7d7906480927a91f29e0659c1cbffebf5cb->enter($__internal_db0e96e35e3f17762808ebc44d5ce7d7906480927a91f29e0659c1cbffebf5cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_8a52a086d5fa27df06c326bc1372ecb4f7a5d98bf7e2b1845568c69ba27f4337 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a52a086d5fa27df06c326bc1372ecb4f7a5d98bf7e2b1845568c69ba27f4337->enter($__internal_8a52a086d5fa27df06c326bc1372ecb4f7a5d98bf7e2b1845568c69ba27f4337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_db0e96e35e3f17762808ebc44d5ce7d7906480927a91f29e0659c1cbffebf5cb->leave($__internal_db0e96e35e3f17762808ebc44d5ce7d7906480927a91f29e0659c1cbffebf5cb_prof);

        
        $__internal_8a52a086d5fa27df06c326bc1372ecb4f7a5d98bf7e2b1845568c69ba27f4337->leave($__internal_8a52a086d5fa27df06c326bc1372ecb4f7a5d98bf7e2b1845568c69ba27f4337_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_84bcaa7d64b575e086378d864c00f24f9352e1e7f0bbba90c53e9262572c93f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84bcaa7d64b575e086378d864c00f24f9352e1e7f0bbba90c53e9262572c93f4->enter($__internal_84bcaa7d64b575e086378d864c00f24f9352e1e7f0bbba90c53e9262572c93f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_d33e7ad5f2bd36319c6904383685bfe301e7d8e793ceeedafcc7e496d2d7586f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d33e7ad5f2bd36319c6904383685bfe301e7d8e793ceeedafcc7e496d2d7586f->enter($__internal_d33e7ad5f2bd36319c6904383685bfe301e7d8e793ceeedafcc7e496d2d7586f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_d33e7ad5f2bd36319c6904383685bfe301e7d8e793ceeedafcc7e496d2d7586f->leave($__internal_d33e7ad5f2bd36319c6904383685bfe301e7d8e793ceeedafcc7e496d2d7586f_prof);

        
        $__internal_84bcaa7d64b575e086378d864c00f24f9352e1e7f0bbba90c53e9262572c93f4->leave($__internal_84bcaa7d64b575e086378d864c00f24f9352e1e7f0bbba90c53e9262572c93f4_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_c32e0d5819e03ba8854fe700add65a4923a645ea1bc2e75917748e3966a2ad1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c32e0d5819e03ba8854fe700add65a4923a645ea1bc2e75917748e3966a2ad1b->enter($__internal_c32e0d5819e03ba8854fe700add65a4923a645ea1bc2e75917748e3966a2ad1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_07cecce0763a4814b5ced43129f5b992360f7e10b49270e4b44434e54316ec10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07cecce0763a4814b5ced43129f5b992360f7e10b49270e4b44434e54316ec10->enter($__internal_07cecce0763a4814b5ced43129f5b992360f7e10b49270e4b44434e54316ec10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_07cecce0763a4814b5ced43129f5b992360f7e10b49270e4b44434e54316ec10->leave($__internal_07cecce0763a4814b5ced43129f5b992360f7e10b49270e4b44434e54316ec10_prof);

        
        $__internal_c32e0d5819e03ba8854fe700add65a4923a645ea1bc2e75917748e3966a2ad1b->leave($__internal_c32e0d5819e03ba8854fe700add65a4923a645ea1bc2e75917748e3966a2ad1b_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_8a6949765d87b982c00ab67b92bff9e4c390ce1f1413a917a88e4d203e507d59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a6949765d87b982c00ab67b92bff9e4c390ce1f1413a917a88e4d203e507d59->enter($__internal_8a6949765d87b982c00ab67b92bff9e4c390ce1f1413a917a88e4d203e507d59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_6b93dea28db3a2222f720b6a72c218c02b4e4da1f58302a1d71e5da0757cffa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b93dea28db3a2222f720b6a72c218c02b4e4da1f58302a1d71e5da0757cffa5->enter($__internal_6b93dea28db3a2222f720b6a72c218c02b4e4da1f58302a1d71e5da0757cffa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_6b93dea28db3a2222f720b6a72c218c02b4e4da1f58302a1d71e5da0757cffa5->leave($__internal_6b93dea28db3a2222f720b6a72c218c02b4e4da1f58302a1d71e5da0757cffa5_prof);

        
        $__internal_8a6949765d87b982c00ab67b92bff9e4c390ce1f1413a917a88e4d203e507d59->leave($__internal_8a6949765d87b982c00ab67b92bff9e4c390ce1f1413a917a88e4d203e507d59_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_fe657fa261f0269b23b9b9c5102cbca59d476deda9f33d112d78605a3098bb38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe657fa261f0269b23b9b9c5102cbca59d476deda9f33d112d78605a3098bb38->enter($__internal_fe657fa261f0269b23b9b9c5102cbca59d476deda9f33d112d78605a3098bb38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_508b20fab799c4c54bcba6c8973fe3ba0c6d3886ca6090616471de4c8f30e86d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_508b20fab799c4c54bcba6c8973fe3ba0c6d3886ca6090616471de4c8f30e86d->enter($__internal_508b20fab799c4c54bcba6c8973fe3ba0c6d3886ca6090616471de4c8f30e86d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        $context["prepend"] =  !(is_string($__internal_b0db1c68e1ef9280f4a3ce5f5da4fc01143b85fde9751080d7d28a0ce65eb184 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_14597f4dfd089026b9b73bf2adcd5781f9d58485cd566294864e9f91ac12631b = "{{") && ('' === $__internal_14597f4dfd089026b9b73bf2adcd5781f9d58485cd566294864e9f91ac12631b || 0 === strpos($__internal_b0db1c68e1ef9280f4a3ce5f5da4fc01143b85fde9751080d7d28a0ce65eb184, $__internal_14597f4dfd089026b9b73bf2adcd5781f9d58485cd566294864e9f91ac12631b)));
        // line 24
        echo "    ";
        $context["append"] =  !(is_string($__internal_0eb456e28fc8a8e3540c9210d3f4a243058ba942a7317f065089814c3866b672 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_1961cf02df1cbee8b049450f68676bc2ee365c85858664d1f70d64b902cae6a5 = "}}") && ('' === $__internal_1961cf02df1cbee8b049450f68676bc2ee365c85858664d1f70d64b902cae6a5 || $__internal_1961cf02df1cbee8b049450f68676bc2ee365c85858664d1f70d64b902cae6a5 === substr($__internal_0eb456e28fc8a8e3540c9210d3f4a243058ba942a7317f065089814c3866b672, -strlen($__internal_1961cf02df1cbee8b049450f68676bc2ee365c85858664d1f70d64b902cae6a5))));
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
        
        $__internal_508b20fab799c4c54bcba6c8973fe3ba0c6d3886ca6090616471de4c8f30e86d->leave($__internal_508b20fab799c4c54bcba6c8973fe3ba0c6d3886ca6090616471de4c8f30e86d_prof);

        
        $__internal_fe657fa261f0269b23b9b9c5102cbca59d476deda9f33d112d78605a3098bb38->leave($__internal_fe657fa261f0269b23b9b9c5102cbca59d476deda9f33d112d78605a3098bb38_prof);

    }

    // line 40
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_bd775f9dbdb3458cedd94de9d0dc0008223b5cd31f8272430cc91b8c057d7e83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd775f9dbdb3458cedd94de9d0dc0008223b5cd31f8272430cc91b8c057d7e83->enter($__internal_bd775f9dbdb3458cedd94de9d0dc0008223b5cd31f8272430cc91b8c057d7e83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_4f08855f7303165ba4d7f878b8caa63bb6fc84ce01068e814df9f8a9c3f4af68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f08855f7303165ba4d7f878b8caa63bb6fc84ce01068e814df9f8a9c3f4af68->enter($__internal_4f08855f7303165ba4d7f878b8caa63bb6fc84ce01068e814df9f8a9c3f4af68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 41
        echo "<div class=\"input-group\">";
        // line 42
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 43
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_4f08855f7303165ba4d7f878b8caa63bb6fc84ce01068e814df9f8a9c3f4af68->leave($__internal_4f08855f7303165ba4d7f878b8caa63bb6fc84ce01068e814df9f8a9c3f4af68_prof);

        
        $__internal_bd775f9dbdb3458cedd94de9d0dc0008223b5cd31f8272430cc91b8c057d7e83->leave($__internal_bd775f9dbdb3458cedd94de9d0dc0008223b5cd31f8272430cc91b8c057d7e83_prof);

    }

    // line 47
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_7804619b342fb047f11153a3d40548aa11b907709282f0942b5e25e937eb68a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7804619b342fb047f11153a3d40548aa11b907709282f0942b5e25e937eb68a3->enter($__internal_7804619b342fb047f11153a3d40548aa11b907709282f0942b5e25e937eb68a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_30d3aa4f1c4414c440e1f218f1e80b5311cbf9a0cc92dc779666d2e6d0be3608 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30d3aa4f1c4414c440e1f218f1e80b5311cbf9a0cc92dc779666d2e6d0be3608->enter($__internal_30d3aa4f1c4414c440e1f218f1e80b5311cbf9a0cc92dc779666d2e6d0be3608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_30d3aa4f1c4414c440e1f218f1e80b5311cbf9a0cc92dc779666d2e6d0be3608->leave($__internal_30d3aa4f1c4414c440e1f218f1e80b5311cbf9a0cc92dc779666d2e6d0be3608_prof);

        
        $__internal_7804619b342fb047f11153a3d40548aa11b907709282f0942b5e25e937eb68a3->leave($__internal_7804619b342fb047f11153a3d40548aa11b907709282f0942b5e25e937eb68a3_prof);

    }

    // line 61
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_8b0944ac1083e9dd3ad4826bb31140cb77e322e19fa410e4a4fb7ed2bbccc343 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b0944ac1083e9dd3ad4826bb31140cb77e322e19fa410e4a4fb7ed2bbccc343->enter($__internal_8b0944ac1083e9dd3ad4826bb31140cb77e322e19fa410e4a4fb7ed2bbccc343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_4e7bc28080de9cb5f63469fd4869c8f3739d279ab4da64a9052af5aaee89eeaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e7bc28080de9cb5f63469fd4869c8f3739d279ab4da64a9052af5aaee89eeaa->enter($__internal_4e7bc28080de9cb5f63469fd4869c8f3739d279ab4da64a9052af5aaee89eeaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_4e7bc28080de9cb5f63469fd4869c8f3739d279ab4da64a9052af5aaee89eeaa->leave($__internal_4e7bc28080de9cb5f63469fd4869c8f3739d279ab4da64a9052af5aaee89eeaa_prof);

        
        $__internal_8b0944ac1083e9dd3ad4826bb31140cb77e322e19fa410e4a4fb7ed2bbccc343->leave($__internal_8b0944ac1083e9dd3ad4826bb31140cb77e322e19fa410e4a4fb7ed2bbccc343_prof);

    }

    // line 80
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_98a631e759bee088621c9f45891869ea62d9fe3fa19596f1b3afa3e4449cb81b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98a631e759bee088621c9f45891869ea62d9fe3fa19596f1b3afa3e4449cb81b->enter($__internal_98a631e759bee088621c9f45891869ea62d9fe3fa19596f1b3afa3e4449cb81b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_c10ac60fd4a032cd7f36760c3946d8fc17ae5c2a5df21b64b98c4a714d048f65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c10ac60fd4a032cd7f36760c3946d8fc17ae5c2a5df21b64b98c4a714d048f65->enter($__internal_c10ac60fd4a032cd7f36760c3946d8fc17ae5c2a5df21b64b98c4a714d048f65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_c10ac60fd4a032cd7f36760c3946d8fc17ae5c2a5df21b64b98c4a714d048f65->leave($__internal_c10ac60fd4a032cd7f36760c3946d8fc17ae5c2a5df21b64b98c4a714d048f65_prof);

        
        $__internal_98a631e759bee088621c9f45891869ea62d9fe3fa19596f1b3afa3e4449cb81b->leave($__internal_98a631e759bee088621c9f45891869ea62d9fe3fa19596f1b3afa3e4449cb81b_prof);

    }

    // line 95
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_eee9b3f23a1e65692f9cf46372316c14c551eb471e8a98d61ce66a707033952f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eee9b3f23a1e65692f9cf46372316c14c551eb471e8a98d61ce66a707033952f->enter($__internal_eee9b3f23a1e65692f9cf46372316c14c551eb471e8a98d61ce66a707033952f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_8ca558c0ba41529c4cbc47f00b56829391acad209e7a0649b2c47458a6ccfdd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ca558c0ba41529c4cbc47f00b56829391acad209e7a0649b2c47458a6ccfdd1->enter($__internal_8ca558c0ba41529c4cbc47f00b56829391acad209e7a0649b2c47458a6ccfdd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

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
        
        $__internal_8ca558c0ba41529c4cbc47f00b56829391acad209e7a0649b2c47458a6ccfdd1->leave($__internal_8ca558c0ba41529c4cbc47f00b56829391acad209e7a0649b2c47458a6ccfdd1_prof);

        
        $__internal_eee9b3f23a1e65692f9cf46372316c14c551eb471e8a98d61ce66a707033952f->leave($__internal_eee9b3f23a1e65692f9cf46372316c14c551eb471e8a98d61ce66a707033952f_prof);

    }

    // line 133
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_5181e80777098dcdf20e794684f792d2be706ab04caa3c3bc7df693d41d0e903 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5181e80777098dcdf20e794684f792d2be706ab04caa3c3bc7df693d41d0e903->enter($__internal_5181e80777098dcdf20e794684f792d2be706ab04caa3c3bc7df693d41d0e903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_415fa5448236e9906d06e2ff08e6678e2565f35c70aafa5b5ea0a1573b810b05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_415fa5448236e9906d06e2ff08e6678e2565f35c70aafa5b5ea0a1573b810b05->enter($__internal_415fa5448236e9906d06e2ff08e6678e2565f35c70aafa5b5ea0a1573b810b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 134
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 135
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_415fa5448236e9906d06e2ff08e6678e2565f35c70aafa5b5ea0a1573b810b05->leave($__internal_415fa5448236e9906d06e2ff08e6678e2565f35c70aafa5b5ea0a1573b810b05_prof);

        
        $__internal_5181e80777098dcdf20e794684f792d2be706ab04caa3c3bc7df693d41d0e903->leave($__internal_5181e80777098dcdf20e794684f792d2be706ab04caa3c3bc7df693d41d0e903_prof);

    }

    // line 138
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_b205eb1dbf75d02d539d4e86cce3217395091dc9df5b8247985f28db55797a42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b205eb1dbf75d02d539d4e86cce3217395091dc9df5b8247985f28db55797a42->enter($__internal_b205eb1dbf75d02d539d4e86cce3217395091dc9df5b8247985f28db55797a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_54f976bddc6effd68031da955a873e948a55a77f1559b90acfb62db7d71360ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54f976bddc6effd68031da955a873e948a55a77f1559b90acfb62db7d71360ae->enter($__internal_54f976bddc6effd68031da955a873e948a55a77f1559b90acfb62db7d71360ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_54f976bddc6effd68031da955a873e948a55a77f1559b90acfb62db7d71360ae->leave($__internal_54f976bddc6effd68031da955a873e948a55a77f1559b90acfb62db7d71360ae_prof);

        
        $__internal_b205eb1dbf75d02d539d4e86cce3217395091dc9df5b8247985f28db55797a42->leave($__internal_b205eb1dbf75d02d539d4e86cce3217395091dc9df5b8247985f28db55797a42_prof);

    }

    // line 158
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_8d1b039071561c04eb2abe45696ca45a11612119775eb49a628607dc13e8b810 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d1b039071561c04eb2abe45696ca45a11612119775eb49a628607dc13e8b810->enter($__internal_8d1b039071561c04eb2abe45696ca45a11612119775eb49a628607dc13e8b810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_10661877070d2a6f67f50e48bd6e9d2840a3e5f27e2a0302adce207d52539d25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10661877070d2a6f67f50e48bd6e9d2840a3e5f27e2a0302adce207d52539d25->enter($__internal_10661877070d2a6f67f50e48bd6e9d2840a3e5f27e2a0302adce207d52539d25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_10661877070d2a6f67f50e48bd6e9d2840a3e5f27e2a0302adce207d52539d25->leave($__internal_10661877070d2a6f67f50e48bd6e9d2840a3e5f27e2a0302adce207d52539d25_prof);

        
        $__internal_8d1b039071561c04eb2abe45696ca45a11612119775eb49a628607dc13e8b810->leave($__internal_8d1b039071561c04eb2abe45696ca45a11612119775eb49a628607dc13e8b810_prof);

    }

    // line 169
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_7a62e4243bf6dee708a1a754091450f29c16cfb3df9a861eda5b76e2b0932868 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a62e4243bf6dee708a1a754091450f29c16cfb3df9a861eda5b76e2b0932868->enter($__internal_7a62e4243bf6dee708a1a754091450f29c16cfb3df9a861eda5b76e2b0932868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_673280dc0bc9f7505e279426ca06c0822f397b6743761c3803d628085a929b9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_673280dc0bc9f7505e279426ca06c0822f397b6743761c3803d628085a929b9c->enter($__internal_673280dc0bc9f7505e279426ca06c0822f397b6743761c3803d628085a929b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_673280dc0bc9f7505e279426ca06c0822f397b6743761c3803d628085a929b9c->leave($__internal_673280dc0bc9f7505e279426ca06c0822f397b6743761c3803d628085a929b9c_prof);

        
        $__internal_7a62e4243bf6dee708a1a754091450f29c16cfb3df9a861eda5b76e2b0932868->leave($__internal_7a62e4243bf6dee708a1a754091450f29c16cfb3df9a861eda5b76e2b0932868_prof);

    }

    // line 182
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_da43507c6d1b791921c9a683925ec8a5f134f0120d81e59d85481f44e171a78c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da43507c6d1b791921c9a683925ec8a5f134f0120d81e59d85481f44e171a78c->enter($__internal_da43507c6d1b791921c9a683925ec8a5f134f0120d81e59d85481f44e171a78c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_51bf6c4dedc1986db893464737af0411b034dc537222b6b8bf4387bd0efb11aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51bf6c4dedc1986db893464737af0411b034dc537222b6b8bf4387bd0efb11aa->enter($__internal_51bf6c4dedc1986db893464737af0411b034dc537222b6b8bf4387bd0efb11aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 183
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 184
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_51bf6c4dedc1986db893464737af0411b034dc537222b6b8bf4387bd0efb11aa->leave($__internal_51bf6c4dedc1986db893464737af0411b034dc537222b6b8bf4387bd0efb11aa_prof);

        
        $__internal_da43507c6d1b791921c9a683925ec8a5f134f0120d81e59d85481f44e171a78c->leave($__internal_da43507c6d1b791921c9a683925ec8a5f134f0120d81e59d85481f44e171a78c_prof);

    }

    // line 187
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_e8285d72ff52f5785a5130073929fe772e84d3b562f8d49d3f1a44af108e5bb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8285d72ff52f5785a5130073929fe772e84d3b562f8d49d3f1a44af108e5bb5->enter($__internal_e8285d72ff52f5785a5130073929fe772e84d3b562f8d49d3f1a44af108e5bb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_8d973ca57ab3fb7a114cbff34352853f7064841a0b0e13a830e395cc64d2753f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d973ca57ab3fb7a114cbff34352853f7064841a0b0e13a830e395cc64d2753f->enter($__internal_8d973ca57ab3fb7a114cbff34352853f7064841a0b0e13a830e395cc64d2753f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 189
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 190
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_8d973ca57ab3fb7a114cbff34352853f7064841a0b0e13a830e395cc64d2753f->leave($__internal_8d973ca57ab3fb7a114cbff34352853f7064841a0b0e13a830e395cc64d2753f_prof);

        
        $__internal_e8285d72ff52f5785a5130073929fe772e84d3b562f8d49d3f1a44af108e5bb5->leave($__internal_e8285d72ff52f5785a5130073929fe772e84d3b562f8d49d3f1a44af108e5bb5_prof);

    }

    // line 193
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_4f83616553d05818767a1b70ead160c5e162961650b78550f0b30ccd389b7877 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f83616553d05818767a1b70ead160c5e162961650b78550f0b30ccd389b7877->enter($__internal_4f83616553d05818767a1b70ead160c5e162961650b78550f0b30ccd389b7877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_0c96f297736cf55535695a5ac802107bb0a5628bfac1144f36ba0658aaa15687 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c96f297736cf55535695a5ac802107bb0a5628bfac1144f36ba0658aaa15687->enter($__internal_0c96f297736cf55535695a5ac802107bb0a5628bfac1144f36ba0658aaa15687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 194
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 196
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_0c96f297736cf55535695a5ac802107bb0a5628bfac1144f36ba0658aaa15687->leave($__internal_0c96f297736cf55535695a5ac802107bb0a5628bfac1144f36ba0658aaa15687_prof);

        
        $__internal_4f83616553d05818767a1b70ead160c5e162961650b78550f0b30ccd389b7877->leave($__internal_4f83616553d05818767a1b70ead160c5e162961650b78550f0b30ccd389b7877_prof);

    }

    // line 199
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_1e326d05afb8880ec27b252bd3ad8899537656532be86aa7a2c6740ba9d45363 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e326d05afb8880ec27b252bd3ad8899537656532be86aa7a2c6740ba9d45363->enter($__internal_1e326d05afb8880ec27b252bd3ad8899537656532be86aa7a2c6740ba9d45363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_6c59a9e5208619aa6f2f2020074cd72f49fc2fa978957340d6e92f8ed41df2e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c59a9e5208619aa6f2f2020074cd72f49fc2fa978957340d6e92f8ed41df2e3->enter($__internal_6c59a9e5208619aa6f2f2020074cd72f49fc2fa978957340d6e92f8ed41df2e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 200
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 202
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_6c59a9e5208619aa6f2f2020074cd72f49fc2fa978957340d6e92f8ed41df2e3->leave($__internal_6c59a9e5208619aa6f2f2020074cd72f49fc2fa978957340d6e92f8ed41df2e3_prof);

        
        $__internal_1e326d05afb8880ec27b252bd3ad8899537656532be86aa7a2c6740ba9d45363->leave($__internal_1e326d05afb8880ec27b252bd3ad8899537656532be86aa7a2c6740ba9d45363_prof);

    }

    // line 205
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_beaafa95485259562c6b2c89b2555eacd0c154777e208d87217360af594668ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_beaafa95485259562c6b2c89b2555eacd0c154777e208d87217360af594668ba->enter($__internal_beaafa95485259562c6b2c89b2555eacd0c154777e208d87217360af594668ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_8de653e0f196694b65490b624277cf703384acdad438420bde111823b863da79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8de653e0f196694b65490b624277cf703384acdad438420bde111823b863da79->enter($__internal_8de653e0f196694b65490b624277cf703384acdad438420bde111823b863da79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_8de653e0f196694b65490b624277cf703384acdad438420bde111823b863da79->leave($__internal_8de653e0f196694b65490b624277cf703384acdad438420bde111823b863da79_prof);

        
        $__internal_beaafa95485259562c6b2c89b2555eacd0c154777e208d87217360af594668ba->leave($__internal_beaafa95485259562c6b2c89b2555eacd0c154777e208d87217360af594668ba_prof);

    }

    // line 232
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_aef32b64a46d3a0a4a5038aab0b9fb68e223d9664e396eb5495e999c94ac4d2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aef32b64a46d3a0a4a5038aab0b9fb68e223d9664e396eb5495e999c94ac4d2d->enter($__internal_aef32b64a46d3a0a4a5038aab0b9fb68e223d9664e396eb5495e999c94ac4d2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_3ac9fbab6f6c353e4c1e5ebbb77f90eb4e4f0877b95d0cff3662330819f22b0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ac9fbab6f6c353e4c1e5ebbb77f90eb4e4f0877b95d0cff3662330819f22b0a->enter($__internal_3ac9fbab6f6c353e4c1e5ebbb77f90eb4e4f0877b95d0cff3662330819f22b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_3ac9fbab6f6c353e4c1e5ebbb77f90eb4e4f0877b95d0cff3662330819f22b0a->leave($__internal_3ac9fbab6f6c353e4c1e5ebbb77f90eb4e4f0877b95d0cff3662330819f22b0a_prof);

        
        $__internal_aef32b64a46d3a0a4a5038aab0b9fb68e223d9664e396eb5495e999c94ac4d2d->leave($__internal_aef32b64a46d3a0a4a5038aab0b9fb68e223d9664e396eb5495e999c94ac4d2d_prof);

    }

    // line 240
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_2d020fb7eb7663485649c64126440df159462dbb66609f3fb9041457c9e7e060 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d020fb7eb7663485649c64126440df159462dbb66609f3fb9041457c9e7e060->enter($__internal_2d020fb7eb7663485649c64126440df159462dbb66609f3fb9041457c9e7e060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_da7385c570c86db8ca70de065d74aee87b6ed4402680626032766d71bf4cc698 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da7385c570c86db8ca70de065d74aee87b6ed4402680626032766d71bf4cc698->enter($__internal_da7385c570c86db8ca70de065d74aee87b6ed4402680626032766d71bf4cc698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 241
        echo "<div class=\"form-group\">";
        // line 242
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 243
        echo "</div>";
        
        $__internal_da7385c570c86db8ca70de065d74aee87b6ed4402680626032766d71bf4cc698->leave($__internal_da7385c570c86db8ca70de065d74aee87b6ed4402680626032766d71bf4cc698_prof);

        
        $__internal_2d020fb7eb7663485649c64126440df159462dbb66609f3fb9041457c9e7e060->leave($__internal_2d020fb7eb7663485649c64126440df159462dbb66609f3fb9041457c9e7e060_prof);

    }

    // line 246
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_a3fce1b88bca0c959eac579e216546f02e8cad07713a1ad61bbb282dad5686fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3fce1b88bca0c959eac579e216546f02e8cad07713a1ad61bbb282dad5686fd->enter($__internal_a3fce1b88bca0c959eac579e216546f02e8cad07713a1ad61bbb282dad5686fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_d7d29b7386897dc1dae28028578c1dc5080d5cf76ee783e455e916ecbf437069 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7d29b7386897dc1dae28028578c1dc5080d5cf76ee783e455e916ecbf437069->enter($__internal_d7d29b7386897dc1dae28028578c1dc5080d5cf76ee783e455e916ecbf437069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 247
        $context["force_error"] = true;
        // line 248
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_d7d29b7386897dc1dae28028578c1dc5080d5cf76ee783e455e916ecbf437069->leave($__internal_d7d29b7386897dc1dae28028578c1dc5080d5cf76ee783e455e916ecbf437069_prof);

        
        $__internal_a3fce1b88bca0c959eac579e216546f02e8cad07713a1ad61bbb282dad5686fd->leave($__internal_a3fce1b88bca0c959eac579e216546f02e8cad07713a1ad61bbb282dad5686fd_prof);

    }

    // line 251
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_a438502a9452fc2c939a1498e496a7a3036e9f446afb48b03a244d19eb9dc289 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a438502a9452fc2c939a1498e496a7a3036e9f446afb48b03a244d19eb9dc289->enter($__internal_a438502a9452fc2c939a1498e496a7a3036e9f446afb48b03a244d19eb9dc289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_38b67ef123d1028973d78b61dd40572b9d11879019422315bf93656aaf381cac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38b67ef123d1028973d78b61dd40572b9d11879019422315bf93656aaf381cac->enter($__internal_38b67ef123d1028973d78b61dd40572b9d11879019422315bf93656aaf381cac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 252
        $context["force_error"] = true;
        // line 253
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_38b67ef123d1028973d78b61dd40572b9d11879019422315bf93656aaf381cac->leave($__internal_38b67ef123d1028973d78b61dd40572b9d11879019422315bf93656aaf381cac_prof);

        
        $__internal_a438502a9452fc2c939a1498e496a7a3036e9f446afb48b03a244d19eb9dc289->leave($__internal_a438502a9452fc2c939a1498e496a7a3036e9f446afb48b03a244d19eb9dc289_prof);

    }

    // line 256
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_e7083cbddf5bc659deab2bc34056412a85b34c77bd5ee92fd48d32b55786137f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7083cbddf5bc659deab2bc34056412a85b34c77bd5ee92fd48d32b55786137f->enter($__internal_e7083cbddf5bc659deab2bc34056412a85b34c77bd5ee92fd48d32b55786137f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_626f3c33310922fedce42d1ced617f1b6fdfbd360eff0a9aba108053d92b9cf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_626f3c33310922fedce42d1ced617f1b6fdfbd360eff0a9aba108053d92b9cf9->enter($__internal_626f3c33310922fedce42d1ced617f1b6fdfbd360eff0a9aba108053d92b9cf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 257
        $context["force_error"] = true;
        // line 258
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_626f3c33310922fedce42d1ced617f1b6fdfbd360eff0a9aba108053d92b9cf9->leave($__internal_626f3c33310922fedce42d1ced617f1b6fdfbd360eff0a9aba108053d92b9cf9_prof);

        
        $__internal_e7083cbddf5bc659deab2bc34056412a85b34c77bd5ee92fd48d32b55786137f->leave($__internal_e7083cbddf5bc659deab2bc34056412a85b34c77bd5ee92fd48d32b55786137f_prof);

    }

    // line 261
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_04653d2a157282ca5f4c4a222059cb698fb51e6ca32f27c630c78fda2fff2419 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04653d2a157282ca5f4c4a222059cb698fb51e6ca32f27c630c78fda2fff2419->enter($__internal_04653d2a157282ca5f4c4a222059cb698fb51e6ca32f27c630c78fda2fff2419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_4cb29e73b0febd3b111764cfb397c215384cb26ba67ecce4bbe120b1c0bdec38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cb29e73b0febd3b111764cfb397c215384cb26ba67ecce4bbe120b1c0bdec38->enter($__internal_4cb29e73b0febd3b111764cfb397c215384cb26ba67ecce4bbe120b1c0bdec38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 262
        $context["force_error"] = true;
        // line 263
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_4cb29e73b0febd3b111764cfb397c215384cb26ba67ecce4bbe120b1c0bdec38->leave($__internal_4cb29e73b0febd3b111764cfb397c215384cb26ba67ecce4bbe120b1c0bdec38_prof);

        
        $__internal_04653d2a157282ca5f4c4a222059cb698fb51e6ca32f27c630c78fda2fff2419->leave($__internal_04653d2a157282ca5f4c4a222059cb698fb51e6ca32f27c630c78fda2fff2419_prof);

    }

    // line 266
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_98de0d5bcfa2de65513bb4a418227fbc7ba617d690c330fec04cc3377ad31464 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98de0d5bcfa2de65513bb4a418227fbc7ba617d690c330fec04cc3377ad31464->enter($__internal_98de0d5bcfa2de65513bb4a418227fbc7ba617d690c330fec04cc3377ad31464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_3b5a37816160c1eed565d03ef6793a97d044f6816b890a26240f196afa20632a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b5a37816160c1eed565d03ef6793a97d044f6816b890a26240f196afa20632a->enter($__internal_3b5a37816160c1eed565d03ef6793a97d044f6816b890a26240f196afa20632a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_3b5a37816160c1eed565d03ef6793a97d044f6816b890a26240f196afa20632a->leave($__internal_3b5a37816160c1eed565d03ef6793a97d044f6816b890a26240f196afa20632a_prof);

        
        $__internal_98de0d5bcfa2de65513bb4a418227fbc7ba617d690c330fec04cc3377ad31464->leave($__internal_98de0d5bcfa2de65513bb4a418227fbc7ba617d690c330fec04cc3377ad31464_prof);

    }

    // line 273
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_b9a5378b0688715f36537f07e9a411f35b1ed1beeacbd5cd74c41a0869da3db6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9a5378b0688715f36537f07e9a411f35b1ed1beeacbd5cd74c41a0869da3db6->enter($__internal_b9a5378b0688715f36537f07e9a411f35b1ed1beeacbd5cd74c41a0869da3db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_bc8e476855d0672808b511fd1aa0649785c89babe482357b264ed5c3a574ddb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc8e476855d0672808b511fd1aa0649785c89babe482357b264ed5c3a574ddb7->enter($__internal_bc8e476855d0672808b511fd1aa0649785c89babe482357b264ed5c3a574ddb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_bc8e476855d0672808b511fd1aa0649785c89babe482357b264ed5c3a574ddb7->leave($__internal_bc8e476855d0672808b511fd1aa0649785c89babe482357b264ed5c3a574ddb7_prof);

        
        $__internal_b9a5378b0688715f36537f07e9a411f35b1ed1beeacbd5cd74c41a0869da3db6->leave($__internal_b9a5378b0688715f36537f07e9a411f35b1ed1beeacbd5cd74c41a0869da3db6_prof);

    }

    // line 282
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_8a1b2a24cbbdd33a59597c3a0adf05d30dab2f993bf6d789996562b3fd79fc92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a1b2a24cbbdd33a59597c3a0adf05d30dab2f993bf6d789996562b3fd79fc92->enter($__internal_8a1b2a24cbbdd33a59597c3a0adf05d30dab2f993bf6d789996562b3fd79fc92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_23577a4e6a04aee6b57dbf0642e9d89076e00745cb833333f27504beba31cee1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23577a4e6a04aee6b57dbf0642e9d89076e00745cb833333f27504beba31cee1->enter($__internal_23577a4e6a04aee6b57dbf0642e9d89076e00745cb833333f27504beba31cee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_23577a4e6a04aee6b57dbf0642e9d89076e00745cb833333f27504beba31cee1->leave($__internal_23577a4e6a04aee6b57dbf0642e9d89076e00745cb833333f27504beba31cee1_prof);

        
        $__internal_8a1b2a24cbbdd33a59597c3a0adf05d30dab2f993bf6d789996562b3fd79fc92->leave($__internal_8a1b2a24cbbdd33a59597c3a0adf05d30dab2f993bf6d789996562b3fd79fc92_prof);

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
", "bootstrap_3_layout.html.twig", "/Users/Rachid/Documents/Projet Client/ulimprime/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
