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
        $__internal_9757629df0e378891c780c06e90a6e950ec24a815c774da2caf9b2ea394f8b9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9757629df0e378891c780c06e90a6e950ec24a815c774da2caf9b2ea394f8b9b->enter($__internal_9757629df0e378891c780c06e90a6e950ec24a815c774da2caf9b2ea394f8b9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $__internal_56b5a19305e08864a586fcaa44bf3b092e2658feabbc1f371797a4489bcca0fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56b5a19305e08864a586fcaa44bf3b092e2658feabbc1f371797a4489bcca0fc->enter($__internal_56b5a19305e08864a586fcaa44bf3b092e2658feabbc1f371797a4489bcca0fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9757629df0e378891c780c06e90a6e950ec24a815c774da2caf9b2ea394f8b9b->leave($__internal_9757629df0e378891c780c06e90a6e950ec24a815c774da2caf9b2ea394f8b9b_prof);

        
        $__internal_56b5a19305e08864a586fcaa44bf3b092e2658feabbc1f371797a4489bcca0fc->leave($__internal_56b5a19305e08864a586fcaa44bf3b092e2658feabbc1f371797a4489bcca0fc_prof);

    }

    // line 6
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_4d4e47f9a33452e0ba54353076be9adb3a6f9848a1e55e63ef40e1e8c52566b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d4e47f9a33452e0ba54353076be9adb3a6f9848a1e55e63ef40e1e8c52566b9->enter($__internal_4d4e47f9a33452e0ba54353076be9adb3a6f9848a1e55e63ef40e1e8c52566b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_65550784ce2774e7076534e997be91cfde47b4548a2b193bcec998da46edf123 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65550784ce2774e7076534e997be91cfde47b4548a2b193bcec998da46edf123->enter($__internal_65550784ce2774e7076534e997be91cfde47b4548a2b193bcec998da46edf123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 7
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 8
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_65550784ce2774e7076534e997be91cfde47b4548a2b193bcec998da46edf123->leave($__internal_65550784ce2774e7076534e997be91cfde47b4548a2b193bcec998da46edf123_prof);

        
        $__internal_4d4e47f9a33452e0ba54353076be9adb3a6f9848a1e55e63ef40e1e8c52566b9->leave($__internal_4d4e47f9a33452e0ba54353076be9adb3a6f9848a1e55e63ef40e1e8c52566b9_prof);

    }

    // line 13
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_3ca762161547f1cc5db5ccfc643bcf8590620551ae53a32c2f8edc6d8e056fb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ca762161547f1cc5db5ccfc643bcf8590620551ae53a32c2f8edc6d8e056fb6->enter($__internal_3ca762161547f1cc5db5ccfc643bcf8590620551ae53a32c2f8edc6d8e056fb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_712fdba1501ae297739dcb86fd2972dfde0ef4b6f47a73331b49b0d8dcc3c89a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_712fdba1501ae297739dcb86fd2972dfde0ef4b6f47a73331b49b0d8dcc3c89a->enter($__internal_712fdba1501ae297739dcb86fd2972dfde0ef4b6f47a73331b49b0d8dcc3c89a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 14
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 15
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 16
            echo "    ";
        }
        // line 17
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_712fdba1501ae297739dcb86fd2972dfde0ef4b6f47a73331b49b0d8dcc3c89a->leave($__internal_712fdba1501ae297739dcb86fd2972dfde0ef4b6f47a73331b49b0d8dcc3c89a_prof);

        
        $__internal_3ca762161547f1cc5db5ccfc643bcf8590620551ae53a32c2f8edc6d8e056fb6->leave($__internal_3ca762161547f1cc5db5ccfc643bcf8590620551ae53a32c2f8edc6d8e056fb6_prof);

    }

    // line 20
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_3ab99fdb8d4d189cd5ba5ae5b1ccc7a353be43a8c7cd8d00f725fd9cfaddf57e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ab99fdb8d4d189cd5ba5ae5b1ccc7a353be43a8c7cd8d00f725fd9cfaddf57e->enter($__internal_3ab99fdb8d4d189cd5ba5ae5b1ccc7a353be43a8c7cd8d00f725fd9cfaddf57e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_e553db751226aa0eee08cf6b79c7ebf0847db703b63e5011b54c8db0f826541d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e553db751226aa0eee08cf6b79c7ebf0847db703b63e5011b54c8db0f826541d->enter($__internal_e553db751226aa0eee08cf6b79c7ebf0847db703b63e5011b54c8db0f826541d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 21
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " button"))));
        // line 22
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_e553db751226aa0eee08cf6b79c7ebf0847db703b63e5011b54c8db0f826541d->leave($__internal_e553db751226aa0eee08cf6b79c7ebf0847db703b63e5011b54c8db0f826541d_prof);

        
        $__internal_3ab99fdb8d4d189cd5ba5ae5b1ccc7a353be43a8c7cd8d00f725fd9cfaddf57e->leave($__internal_3ab99fdb8d4d189cd5ba5ae5b1ccc7a353be43a8c7cd8d00f725fd9cfaddf57e_prof);

    }

    // line 25
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_c06b61b99772f687061c913d56736d37b96bfb0fe5dbbaf6c9504c7a2300b297 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c06b61b99772f687061c913d56736d37b96bfb0fe5dbbaf6c9504c7a2300b297->enter($__internal_c06b61b99772f687061c913d56736d37b96bfb0fe5dbbaf6c9504c7a2300b297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_7722c89bbadc78500ceaaa2e4bd9e2525c254463e7316bbec71a3c70cbde949a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7722c89bbadc78500ceaaa2e4bd9e2525c254463e7316bbec71a3c70cbde949a->enter($__internal_7722c89bbadc78500ceaaa2e4bd9e2525c254463e7316bbec71a3c70cbde949a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

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
        
        $__internal_7722c89bbadc78500ceaaa2e4bd9e2525c254463e7316bbec71a3c70cbde949a->leave($__internal_7722c89bbadc78500ceaaa2e4bd9e2525c254463e7316bbec71a3c70cbde949a_prof);

        
        $__internal_c06b61b99772f687061c913d56736d37b96bfb0fe5dbbaf6c9504c7a2300b297->leave($__internal_c06b61b99772f687061c913d56736d37b96bfb0fe5dbbaf6c9504c7a2300b297_prof);

    }

    // line 44
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_00b3f7baf280a20aa02acda69e720948f0b7595c6ecd493ab35d84f36a7bba86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00b3f7baf280a20aa02acda69e720948f0b7595c6ecd493ab35d84f36a7bba86->enter($__internal_00b3f7baf280a20aa02acda69e720948f0b7595c6ecd493ab35d84f36a7bba86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_4afeb8eed2dea85b6e5e61c6c0f235994b3261fea3f3d4a2c3682653c71dc5de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4afeb8eed2dea85b6e5e61c6c0f235994b3261fea3f3d4a2c3682653c71dc5de->enter($__internal_4afeb8eed2dea85b6e5e61c6c0f235994b3261fea3f3d4a2c3682653c71dc5de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

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
        
        $__internal_4afeb8eed2dea85b6e5e61c6c0f235994b3261fea3f3d4a2c3682653c71dc5de->leave($__internal_4afeb8eed2dea85b6e5e61c6c0f235994b3261fea3f3d4a2c3682653c71dc5de_prof);

        
        $__internal_00b3f7baf280a20aa02acda69e720948f0b7595c6ecd493ab35d84f36a7bba86->leave($__internal_00b3f7baf280a20aa02acda69e720948f0b7595c6ecd493ab35d84f36a7bba86_prof);

    }

    // line 55
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_09e258929c9107a7e3487d44066fa0ad075015fbc2e2ecdc1b0f3239287d9c62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09e258929c9107a7e3487d44066fa0ad075015fbc2e2ecdc1b0f3239287d9c62->enter($__internal_09e258929c9107a7e3487d44066fa0ad075015fbc2e2ecdc1b0f3239287d9c62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_73596cfdfefa9c44f5a06008b6de7f3389892c66bdc592a0dc39e44decf05727 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73596cfdfefa9c44f5a06008b6de7f3389892c66bdc592a0dc39e44decf05727->enter($__internal_73596cfdfefa9c44f5a06008b6de7f3389892c66bdc592a0dc39e44decf05727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_73596cfdfefa9c44f5a06008b6de7f3389892c66bdc592a0dc39e44decf05727->leave($__internal_73596cfdfefa9c44f5a06008b6de7f3389892c66bdc592a0dc39e44decf05727_prof);

        
        $__internal_09e258929c9107a7e3487d44066fa0ad075015fbc2e2ecdc1b0f3239287d9c62->leave($__internal_09e258929c9107a7e3487d44066fa0ad075015fbc2e2ecdc1b0f3239287d9c62_prof);

    }

    // line 71
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_93b4a3d2afe712a77a67520b34d4a711298ea2b167a070cbca2c03227b1f2825 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93b4a3d2afe712a77a67520b34d4a711298ea2b167a070cbca2c03227b1f2825->enter($__internal_93b4a3d2afe712a77a67520b34d4a711298ea2b167a070cbca2c03227b1f2825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_d99f3ce4b6e603b2eb2cc3a35ea1c2fe6b66c8a9f963028ffc59e61b27eeb812 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d99f3ce4b6e603b2eb2cc3a35ea1c2fe6b66c8a9f963028ffc59e61b27eeb812->enter($__internal_d99f3ce4b6e603b2eb2cc3a35ea1c2fe6b66c8a9f963028ffc59e61b27eeb812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_d99f3ce4b6e603b2eb2cc3a35ea1c2fe6b66c8a9f963028ffc59e61b27eeb812->leave($__internal_d99f3ce4b6e603b2eb2cc3a35ea1c2fe6b66c8a9f963028ffc59e61b27eeb812_prof);

        
        $__internal_93b4a3d2afe712a77a67520b34d4a711298ea2b167a070cbca2c03227b1f2825->leave($__internal_93b4a3d2afe712a77a67520b34d4a711298ea2b167a070cbca2c03227b1f2825_prof);

    }

    // line 90
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_20ad04b0858fb3d5e8935a43914af14a783c1b3305a923deff8ab39c1025003c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20ad04b0858fb3d5e8935a43914af14a783c1b3305a923deff8ab39c1025003c->enter($__internal_20ad04b0858fb3d5e8935a43914af14a783c1b3305a923deff8ab39c1025003c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_8e7aab16290f148dd0a2a88d75bedcfbc03a7a56dc82c5e888b391cfd0bf1bb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e7aab16290f148dd0a2a88d75bedcfbc03a7a56dc82c5e888b391cfd0bf1bb8->enter($__internal_8e7aab16290f148dd0a2a88d75bedcfbc03a7a56dc82c5e888b391cfd0bf1bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_8e7aab16290f148dd0a2a88d75bedcfbc03a7a56dc82c5e888b391cfd0bf1bb8->leave($__internal_8e7aab16290f148dd0a2a88d75bedcfbc03a7a56dc82c5e888b391cfd0bf1bb8_prof);

        
        $__internal_20ad04b0858fb3d5e8935a43914af14a783c1b3305a923deff8ab39c1025003c->leave($__internal_20ad04b0858fb3d5e8935a43914af14a783c1b3305a923deff8ab39c1025003c_prof);

    }

    // line 139
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_d82a1ee8288b4d5e92b8f2ae6ffb71bdc0f08406bc97ed7916e941142fa60906 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d82a1ee8288b4d5e92b8f2ae6ffb71bdc0f08406bc97ed7916e941142fa60906->enter($__internal_d82a1ee8288b4d5e92b8f2ae6ffb71bdc0f08406bc97ed7916e941142fa60906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_0372aa9c885bab573d46574657a7df27cdb88046ef3686c3dc5de2d011ee4f2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0372aa9c885bab573d46574657a7df27cdb88046ef3686c3dc5de2d011ee4f2a->enter($__internal_0372aa9c885bab573d46574657a7df27cdb88046ef3686c3dc5de2d011ee4f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

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
        
        $__internal_0372aa9c885bab573d46574657a7df27cdb88046ef3686c3dc5de2d011ee4f2a->leave($__internal_0372aa9c885bab573d46574657a7df27cdb88046ef3686c3dc5de2d011ee4f2a_prof);

        
        $__internal_d82a1ee8288b4d5e92b8f2ae6ffb71bdc0f08406bc97ed7916e941142fa60906->leave($__internal_d82a1ee8288b4d5e92b8f2ae6ffb71bdc0f08406bc97ed7916e941142fa60906_prof);

    }

    // line 167
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_fb7b77f8f62200d3b25facabccd9c8bb8cba44634a74618adbb35c3dc9b22486 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb7b77f8f62200d3b25facabccd9c8bb8cba44634a74618adbb35c3dc9b22486->enter($__internal_fb7b77f8f62200d3b25facabccd9c8bb8cba44634a74618adbb35c3dc9b22486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_eadcd5caaa33d499b0126cb0dd61842fa437fbf3b22e031ca8edd580d2546b41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eadcd5caaa33d499b0126cb0dd61842fa437fbf3b22e031ca8edd580d2546b41->enter($__internal_eadcd5caaa33d499b0126cb0dd61842fa437fbf3b22e031ca8edd580d2546b41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_eadcd5caaa33d499b0126cb0dd61842fa437fbf3b22e031ca8edd580d2546b41->leave($__internal_eadcd5caaa33d499b0126cb0dd61842fa437fbf3b22e031ca8edd580d2546b41_prof);

        
        $__internal_fb7b77f8f62200d3b25facabccd9c8bb8cba44634a74618adbb35c3dc9b22486->leave($__internal_fb7b77f8f62200d3b25facabccd9c8bb8cba44634a74618adbb35c3dc9b22486_prof);

    }

    // line 187
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_e03fefa3495578d146e415ee3ea7fb62c2e445473c6e0515a6fd26e5e0d3ac4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e03fefa3495578d146e415ee3ea7fb62c2e445473c6e0515a6fd26e5e0d3ac4f->enter($__internal_e03fefa3495578d146e415ee3ea7fb62c2e445473c6e0515a6fd26e5e0d3ac4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_668d71ed11761bae21fa875c7b292da1472d1edf01907924a64c6cb9c804f23b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_668d71ed11761bae21fa875c7b292da1472d1edf01907924a64c6cb9c804f23b->enter($__internal_668d71ed11761bae21fa875c7b292da1472d1edf01907924a64c6cb9c804f23b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_668d71ed11761bae21fa875c7b292da1472d1edf01907924a64c6cb9c804f23b->leave($__internal_668d71ed11761bae21fa875c7b292da1472d1edf01907924a64c6cb9c804f23b_prof);

        
        $__internal_e03fefa3495578d146e415ee3ea7fb62c2e445473c6e0515a6fd26e5e0d3ac4f->leave($__internal_e03fefa3495578d146e415ee3ea7fb62c2e445473c6e0515a6fd26e5e0d3ac4f_prof);

    }

    // line 201
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_f83af88fc8d9642af2671deb36128cc774ca991f1de3eed28f261d00154648cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f83af88fc8d9642af2671deb36128cc774ca991f1de3eed28f261d00154648cb->enter($__internal_f83af88fc8d9642af2671deb36128cc774ca991f1de3eed28f261d00154648cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_f342d7c2e08afdeb18a3561008136235741027ef63653ffa49cdc34e3edbc2bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f342d7c2e08afdeb18a3561008136235741027ef63653ffa49cdc34e3edbc2bc->enter($__internal_f342d7c2e08afdeb18a3561008136235741027ef63653ffa49cdc34e3edbc2bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_f342d7c2e08afdeb18a3561008136235741027ef63653ffa49cdc34e3edbc2bc->leave($__internal_f342d7c2e08afdeb18a3561008136235741027ef63653ffa49cdc34e3edbc2bc_prof);

        
        $__internal_f83af88fc8d9642af2671deb36128cc774ca991f1de3eed28f261d00154648cb->leave($__internal_f83af88fc8d9642af2671deb36128cc774ca991f1de3eed28f261d00154648cb_prof);

    }

    // line 217
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_a3b1d40a304abba022a050096dbbbc78960abb4af00c101adaf61544788b4797 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3b1d40a304abba022a050096dbbbc78960abb4af00c101adaf61544788b4797->enter($__internal_a3b1d40a304abba022a050096dbbbc78960abb4af00c101adaf61544788b4797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_03d65f921d1c6b52371642c3d1b706d8870a5684629d8273b9411aec2dd3140b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03d65f921d1c6b52371642c3d1b706d8870a5684629d8273b9411aec2dd3140b->enter($__internal_03d65f921d1c6b52371642c3d1b706d8870a5684629d8273b9411aec2dd3140b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 218
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 219
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 220
            echo "    ";
        }
        // line 221
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_03d65f921d1c6b52371642c3d1b706d8870a5684629d8273b9411aec2dd3140b->leave($__internal_03d65f921d1c6b52371642c3d1b706d8870a5684629d8273b9411aec2dd3140b_prof);

        
        $__internal_a3b1d40a304abba022a050096dbbbc78960abb4af00c101adaf61544788b4797->leave($__internal_a3b1d40a304abba022a050096dbbbc78960abb4af00c101adaf61544788b4797_prof);

    }

    // line 224
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_bf365901f4142620f9690ba2ec133484294ae89d39698d4d47636ca8a3cffac5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf365901f4142620f9690ba2ec133484294ae89d39698d4d47636ca8a3cffac5->enter($__internal_bf365901f4142620f9690ba2ec133484294ae89d39698d4d47636ca8a3cffac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_6703efebc56e233df915cd8fd00807bbe99402e82d58bec9c4e52ca6334777ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6703efebc56e233df915cd8fd00807bbe99402e82d58bec9c4e52ca6334777ae->enter($__internal_6703efebc56e233df915cd8fd00807bbe99402e82d58bec9c4e52ca6334777ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

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
        
        $__internal_6703efebc56e233df915cd8fd00807bbe99402e82d58bec9c4e52ca6334777ae->leave($__internal_6703efebc56e233df915cd8fd00807bbe99402e82d58bec9c4e52ca6334777ae_prof);

        
        $__internal_bf365901f4142620f9690ba2ec133484294ae89d39698d4d47636ca8a3cffac5->leave($__internal_bf365901f4142620f9690ba2ec133484294ae89d39698d4d47636ca8a3cffac5_prof);

    }

    // line 233
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_800031f10c0842be58edea985f96c4a206e57c611044ee421f93731b04b78389 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_800031f10c0842be58edea985f96c4a206e57c611044ee421f93731b04b78389->enter($__internal_800031f10c0842be58edea985f96c4a206e57c611044ee421f93731b04b78389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_a0e89a0818bfd104508a731ca78a22ccb24926293296ae478261d847274b2664 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0e89a0818bfd104508a731ca78a22ccb24926293296ae478261d847274b2664->enter($__internal_a0e89a0818bfd104508a731ca78a22ccb24926293296ae478261d847274b2664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 234
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_a0e89a0818bfd104508a731ca78a22ccb24926293296ae478261d847274b2664->leave($__internal_a0e89a0818bfd104508a731ca78a22ccb24926293296ae478261d847274b2664_prof);

        
        $__internal_800031f10c0842be58edea985f96c4a206e57c611044ee421f93731b04b78389->leave($__internal_800031f10c0842be58edea985f96c4a206e57c611044ee421f93731b04b78389_prof);

    }

    // line 237
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_3fa61ffbd51ae9ce37e2744d0a89998662e3d36cb0aa6a8c6e48071d14562e50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fa61ffbd51ae9ce37e2744d0a89998662e3d36cb0aa6a8c6e48071d14562e50->enter($__internal_3fa61ffbd51ae9ce37e2744d0a89998662e3d36cb0aa6a8c6e48071d14562e50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_e30e5bf2333670e39147474a82e6938681e1d49c338f82b43a02f97ac818533e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e30e5bf2333670e39147474a82e6938681e1d49c338f82b43a02f97ac818533e->enter($__internal_e30e5bf2333670e39147474a82e6938681e1d49c338f82b43a02f97ac818533e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 238
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_e30e5bf2333670e39147474a82e6938681e1d49c338f82b43a02f97ac818533e->leave($__internal_e30e5bf2333670e39147474a82e6938681e1d49c338f82b43a02f97ac818533e_prof);

        
        $__internal_3fa61ffbd51ae9ce37e2744d0a89998662e3d36cb0aa6a8c6e48071d14562e50->leave($__internal_3fa61ffbd51ae9ce37e2744d0a89998662e3d36cb0aa6a8c6e48071d14562e50_prof);

    }

    // line 241
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_01cde7a605e7f8c57a618799e9c71e9899866641f3b753511ea49991090a4c52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01cde7a605e7f8c57a618799e9c71e9899866641f3b753511ea49991090a4c52->enter($__internal_01cde7a605e7f8c57a618799e9c71e9899866641f3b753511ea49991090a4c52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_5ef3da63837f5d0ce7079f6fb6b8b3dc1f2c0660e467b722c6aadc6670ee9cb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ef3da63837f5d0ce7079f6fb6b8b3dc1f2c0660e467b722c6aadc6670ee9cb1->enter($__internal_5ef3da63837f5d0ce7079f6fb6b8b3dc1f2c0660e467b722c6aadc6670ee9cb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_5ef3da63837f5d0ce7079f6fb6b8b3dc1f2c0660e467b722c6aadc6670ee9cb1->leave($__internal_5ef3da63837f5d0ce7079f6fb6b8b3dc1f2c0660e467b722c6aadc6670ee9cb1_prof);

        
        $__internal_01cde7a605e7f8c57a618799e9c71e9899866641f3b753511ea49991090a4c52->leave($__internal_01cde7a605e7f8c57a618799e9c71e9899866641f3b753511ea49991090a4c52_prof);

    }

    // line 269
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_3b77b006acb96f755a514ce7c4606eafc6e2c30e9d718d22fd4be18d1b11e7cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b77b006acb96f755a514ce7c4606eafc6e2c30e9d718d22fd4be18d1b11e7cf->enter($__internal_3b77b006acb96f755a514ce7c4606eafc6e2c30e9d718d22fd4be18d1b11e7cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_a23c3a4429548cdf2947f0dee7d994b41d6d79d0962ca2fa9fcd5a4808adf9c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a23c3a4429548cdf2947f0dee7d994b41d6d79d0962ca2fa9fcd5a4808adf9c5->enter($__internal_a23c3a4429548cdf2947f0dee7d994b41d6d79d0962ca2fa9fcd5a4808adf9c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_a23c3a4429548cdf2947f0dee7d994b41d6d79d0962ca2fa9fcd5a4808adf9c5->leave($__internal_a23c3a4429548cdf2947f0dee7d994b41d6d79d0962ca2fa9fcd5a4808adf9c5_prof);

        
        $__internal_3b77b006acb96f755a514ce7c4606eafc6e2c30e9d718d22fd4be18d1b11e7cf->leave($__internal_3b77b006acb96f755a514ce7c4606eafc6e2c30e9d718d22fd4be18d1b11e7cf_prof);

    }

    // line 279
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_df87703cb85c83d4b12bd92ac5752ae3197ee72ef9b359d515bb0cf0e5fa0272 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df87703cb85c83d4b12bd92ac5752ae3197ee72ef9b359d515bb0cf0e5fa0272->enter($__internal_df87703cb85c83d4b12bd92ac5752ae3197ee72ef9b359d515bb0cf0e5fa0272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_b8220a241cbf7fe16b871bd276294fcbd373e5286df43602a53987a029e979dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8220a241cbf7fe16b871bd276294fcbd373e5286df43602a53987a029e979dc->enter($__internal_b8220a241cbf7fe16b871bd276294fcbd373e5286df43602a53987a029e979dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 280
        $context["force_error"] = true;
        // line 281
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_b8220a241cbf7fe16b871bd276294fcbd373e5286df43602a53987a029e979dc->leave($__internal_b8220a241cbf7fe16b871bd276294fcbd373e5286df43602a53987a029e979dc_prof);

        
        $__internal_df87703cb85c83d4b12bd92ac5752ae3197ee72ef9b359d515bb0cf0e5fa0272->leave($__internal_df87703cb85c83d4b12bd92ac5752ae3197ee72ef9b359d515bb0cf0e5fa0272_prof);

    }

    // line 284
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_928e1ccc0393b1da605c4202be460983cd94c6c3e986c98bc7ae37690fb94db9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_928e1ccc0393b1da605c4202be460983cd94c6c3e986c98bc7ae37690fb94db9->enter($__internal_928e1ccc0393b1da605c4202be460983cd94c6c3e986c98bc7ae37690fb94db9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_0c4ac7e4885e92b50c5aa4e501b43c9ad01ae4b486c17442ede1d9e8896df081 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c4ac7e4885e92b50c5aa4e501b43c9ad01ae4b486c17442ede1d9e8896df081->enter($__internal_0c4ac7e4885e92b50c5aa4e501b43c9ad01ae4b486c17442ede1d9e8896df081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 285
        $context["force_error"] = true;
        // line 286
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_0c4ac7e4885e92b50c5aa4e501b43c9ad01ae4b486c17442ede1d9e8896df081->leave($__internal_0c4ac7e4885e92b50c5aa4e501b43c9ad01ae4b486c17442ede1d9e8896df081_prof);

        
        $__internal_928e1ccc0393b1da605c4202be460983cd94c6c3e986c98bc7ae37690fb94db9->leave($__internal_928e1ccc0393b1da605c4202be460983cd94c6c3e986c98bc7ae37690fb94db9_prof);

    }

    // line 289
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_74844f9e11f90a403d15b1ae75b1580745d16e1a5f417aaeabec0e0b328e64c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74844f9e11f90a403d15b1ae75b1580745d16e1a5f417aaeabec0e0b328e64c6->enter($__internal_74844f9e11f90a403d15b1ae75b1580745d16e1a5f417aaeabec0e0b328e64c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_8d60fb5e4548d6e5e9ac47f4ff86b8cff7df42fa8b550ba51cfc4f4aebfecca1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d60fb5e4548d6e5e9ac47f4ff86b8cff7df42fa8b550ba51cfc4f4aebfecca1->enter($__internal_8d60fb5e4548d6e5e9ac47f4ff86b8cff7df42fa8b550ba51cfc4f4aebfecca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 290
        $context["force_error"] = true;
        // line 291
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_8d60fb5e4548d6e5e9ac47f4ff86b8cff7df42fa8b550ba51cfc4f4aebfecca1->leave($__internal_8d60fb5e4548d6e5e9ac47f4ff86b8cff7df42fa8b550ba51cfc4f4aebfecca1_prof);

        
        $__internal_74844f9e11f90a403d15b1ae75b1580745d16e1a5f417aaeabec0e0b328e64c6->leave($__internal_74844f9e11f90a403d15b1ae75b1580745d16e1a5f417aaeabec0e0b328e64c6_prof);

    }

    // line 294
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_f838f5b9bebbe6bcf1d90cb5ddfaa8b3292dab26f1b7e49d1be5d877e046c095 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f838f5b9bebbe6bcf1d90cb5ddfaa8b3292dab26f1b7e49d1be5d877e046c095->enter($__internal_f838f5b9bebbe6bcf1d90cb5ddfaa8b3292dab26f1b7e49d1be5d877e046c095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_c6fede83bb12eb381baa4282254eec72e80ade7dfdaa61a566ba2b304b53476b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6fede83bb12eb381baa4282254eec72e80ade7dfdaa61a566ba2b304b53476b->enter($__internal_c6fede83bb12eb381baa4282254eec72e80ade7dfdaa61a566ba2b304b53476b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 295
        $context["force_error"] = true;
        // line 296
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_c6fede83bb12eb381baa4282254eec72e80ade7dfdaa61a566ba2b304b53476b->leave($__internal_c6fede83bb12eb381baa4282254eec72e80ade7dfdaa61a566ba2b304b53476b_prof);

        
        $__internal_f838f5b9bebbe6bcf1d90cb5ddfaa8b3292dab26f1b7e49d1be5d877e046c095->leave($__internal_f838f5b9bebbe6bcf1d90cb5ddfaa8b3292dab26f1b7e49d1be5d877e046c095_prof);

    }

    // line 299
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_cf9bf456ea6f58d0838f5a44061f3a6535c88fa612f4f15c5009749b201122f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf9bf456ea6f58d0838f5a44061f3a6535c88fa612f4f15c5009749b201122f8->enter($__internal_cf9bf456ea6f58d0838f5a44061f3a6535c88fa612f4f15c5009749b201122f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_8cce389d70d441bed60bd89cbf83a93d4bd91b8fc8c0e044f94eca874d17cf2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cce389d70d441bed60bd89cbf83a93d4bd91b8fc8c0e044f94eca874d17cf2a->enter($__internal_8cce389d70d441bed60bd89cbf83a93d4bd91b8fc8c0e044f94eca874d17cf2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_8cce389d70d441bed60bd89cbf83a93d4bd91b8fc8c0e044f94eca874d17cf2a->leave($__internal_8cce389d70d441bed60bd89cbf83a93d4bd91b8fc8c0e044f94eca874d17cf2a_prof);

        
        $__internal_cf9bf456ea6f58d0838f5a44061f3a6535c88fa612f4f15c5009749b201122f8->leave($__internal_cf9bf456ea6f58d0838f5a44061f3a6535c88fa612f4f15c5009749b201122f8_prof);

    }

    // line 308
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_549a6427e190d74e00beb4de5aeebcb12c8f260baf052439a96e8800fed5d61d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_549a6427e190d74e00beb4de5aeebcb12c8f260baf052439a96e8800fed5d61d->enter($__internal_549a6427e190d74e00beb4de5aeebcb12c8f260baf052439a96e8800fed5d61d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_fc70097a38d479ba790fa4920bd9df0162ec83f4e6c79228938d01c4a8095aac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc70097a38d479ba790fa4920bd9df0162ec83f4e6c79228938d01c4a8095aac->enter($__internal_fc70097a38d479ba790fa4920bd9df0162ec83f4e6c79228938d01c4a8095aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_fc70097a38d479ba790fa4920bd9df0162ec83f4e6c79228938d01c4a8095aac->leave($__internal_fc70097a38d479ba790fa4920bd9df0162ec83f4e6c79228938d01c4a8095aac_prof);

        
        $__internal_549a6427e190d74e00beb4de5aeebcb12c8f260baf052439a96e8800fed5d61d->leave($__internal_549a6427e190d74e00beb4de5aeebcb12c8f260baf052439a96e8800fed5d61d_prof);

    }

    // line 319
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_60b90f823b0ef7e274c5c0de37d7eb9525e57ee4628acc51fe5dccff250bc27f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60b90f823b0ef7e274c5c0de37d7eb9525e57ee4628acc51fe5dccff250bc27f->enter($__internal_60b90f823b0ef7e274c5c0de37d7eb9525e57ee4628acc51fe5dccff250bc27f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_9f2f3c51db2c1f938103034e7c4ac1c4fb8385f9af58f35e55c945f1ec7d3c3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f2f3c51db2c1f938103034e7c4ac1c4fb8385f9af58f35e55c945f1ec7d3c3b->enter($__internal_9f2f3c51db2c1f938103034e7c4ac1c4fb8385f9af58f35e55c945f1ec7d3c3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_9f2f3c51db2c1f938103034e7c4ac1c4fb8385f9af58f35e55c945f1ec7d3c3b->leave($__internal_9f2f3c51db2c1f938103034e7c4ac1c4fb8385f9af58f35e55c945f1ec7d3c3b_prof);

        
        $__internal_60b90f823b0ef7e274c5c0de37d7eb9525e57ee4628acc51fe5dccff250bc27f->leave($__internal_60b90f823b0ef7e274c5c0de37d7eb9525e57ee4628acc51fe5dccff250bc27f_prof);

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
", "foundation_5_layout.html.twig", "/Users/Rachid/Documents/Projet Client/ulimprime/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/foundation_5_layout.html.twig");
    }
}
