<?php

/* form_table_layout.html.twig */
class __TwigTemplate_14d93923444e4d7602d17a7c9c873a61087089c12d2619d0713a36002886fcb6 extends Twig_Template
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
        $__internal_be75cc383d4a8d3c67b62a93149d31d5bf3a5e7e5b25d22f3d16e84c4ca67a89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be75cc383d4a8d3c67b62a93149d31d5bf3a5e7e5b25d22f3d16e84c4ca67a89->enter($__internal_be75cc383d4a8d3c67b62a93149d31d5bf3a5e7e5b25d22f3d16e84c4ca67a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_2e54bca60af8510cf69e981bec4b6fb004be006207c0cb2e76c22ef2846b531c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e54bca60af8510cf69e981bec4b6fb004be006207c0cb2e76c22ef2846b531c->enter($__internal_2e54bca60af8510cf69e981bec4b6fb004be006207c0cb2e76c22ef2846b531c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_be75cc383d4a8d3c67b62a93149d31d5bf3a5e7e5b25d22f3d16e84c4ca67a89->leave($__internal_be75cc383d4a8d3c67b62a93149d31d5bf3a5e7e5b25d22f3d16e84c4ca67a89_prof);

        
        $__internal_2e54bca60af8510cf69e981bec4b6fb004be006207c0cb2e76c22ef2846b531c->leave($__internal_2e54bca60af8510cf69e981bec4b6fb004be006207c0cb2e76c22ef2846b531c_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_468e38e00e5ce783b13b661af6e0377498ce7d588682ba9a5b50aa56074ed6a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_468e38e00e5ce783b13b661af6e0377498ce7d588682ba9a5b50aa56074ed6a5->enter($__internal_468e38e00e5ce783b13b661af6e0377498ce7d588682ba9a5b50aa56074ed6a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_2a07b144b69c7bde2b0e8c5616a36a59165790f9579f4e7219902c72946595df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a07b144b69c7bde2b0e8c5616a36a59165790f9579f4e7219902c72946595df->enter($__internal_2a07b144b69c7bde2b0e8c5616a36a59165790f9579f4e7219902c72946595df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_2a07b144b69c7bde2b0e8c5616a36a59165790f9579f4e7219902c72946595df->leave($__internal_2a07b144b69c7bde2b0e8c5616a36a59165790f9579f4e7219902c72946595df_prof);

        
        $__internal_468e38e00e5ce783b13b661af6e0377498ce7d588682ba9a5b50aa56074ed6a5->leave($__internal_468e38e00e5ce783b13b661af6e0377498ce7d588682ba9a5b50aa56074ed6a5_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_d8af76de3bd0463671b6a9f105ee69cb7ad14cfebb1df9c35a33c0990fdd32a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8af76de3bd0463671b6a9f105ee69cb7ad14cfebb1df9c35a33c0990fdd32a6->enter($__internal_d8af76de3bd0463671b6a9f105ee69cb7ad14cfebb1df9c35a33c0990fdd32a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_b40b03e411c764772e5d328af3fca9abdf1d5b655d8156c4c57585bc84553eee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b40b03e411c764772e5d328af3fca9abdf1d5b655d8156c4c57585bc84553eee->enter($__internal_b40b03e411c764772e5d328af3fca9abdf1d5b655d8156c4c57585bc84553eee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_b40b03e411c764772e5d328af3fca9abdf1d5b655d8156c4c57585bc84553eee->leave($__internal_b40b03e411c764772e5d328af3fca9abdf1d5b655d8156c4c57585bc84553eee_prof);

        
        $__internal_d8af76de3bd0463671b6a9f105ee69cb7ad14cfebb1df9c35a33c0990fdd32a6->leave($__internal_d8af76de3bd0463671b6a9f105ee69cb7ad14cfebb1df9c35a33c0990fdd32a6_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_3bba041f4ff419a15eb6b062dd228b44255312cb8dc6ac60065db073d3900fad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bba041f4ff419a15eb6b062dd228b44255312cb8dc6ac60065db073d3900fad->enter($__internal_3bba041f4ff419a15eb6b062dd228b44255312cb8dc6ac60065db073d3900fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_33f3497bfcaecb4d81fdcb667599aa09af5dbf783ed4be0eb258137252ce8789 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33f3497bfcaecb4d81fdcb667599aa09af5dbf783ed4be0eb258137252ce8789->enter($__internal_33f3497bfcaecb4d81fdcb667599aa09af5dbf783ed4be0eb258137252ce8789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_33f3497bfcaecb4d81fdcb667599aa09af5dbf783ed4be0eb258137252ce8789->leave($__internal_33f3497bfcaecb4d81fdcb667599aa09af5dbf783ed4be0eb258137252ce8789_prof);

        
        $__internal_3bba041f4ff419a15eb6b062dd228b44255312cb8dc6ac60065db073d3900fad->leave($__internal_3bba041f4ff419a15eb6b062dd228b44255312cb8dc6ac60065db073d3900fad_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_d3e00977f5371236b32a5379453127efb580e86ae22d57efa653f7e0bdd14b87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3e00977f5371236b32a5379453127efb580e86ae22d57efa653f7e0bdd14b87->enter($__internal_d3e00977f5371236b32a5379453127efb580e86ae22d57efa653f7e0bdd14b87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_6d466647b35157b13d062b61bb4bae1f5f9c2fd7ee1df803c10ad70ddc080017 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d466647b35157b13d062b61bb4bae1f5f9c2fd7ee1df803c10ad70ddc080017->enter($__internal_6d466647b35157b13d062b61bb4bae1f5f9c2fd7ee1df803c10ad70ddc080017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form"))) && (twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_6d466647b35157b13d062b61bb4bae1f5f9c2fd7ee1df803c10ad70ddc080017->leave($__internal_6d466647b35157b13d062b61bb4bae1f5f9c2fd7ee1df803c10ad70ddc080017_prof);

        
        $__internal_d3e00977f5371236b32a5379453127efb580e86ae22d57efa653f7e0bdd14b87->leave($__internal_d3e00977f5371236b32a5379453127efb580e86ae22d57efa653f7e0bdd14b87_prof);

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
        {%- if form is rootform and errors|length > 0 -%}
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
", "form_table_layout.html.twig", "/Users/Rachid/SymfonyProjects/esagdiplome/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/form_table_layout.html.twig");
    }
}
