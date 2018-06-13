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
        $__internal_d895e7fe38acc7f6b498690f12724e6463765092ff24cb9c077c234ad16f9678 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d895e7fe38acc7f6b498690f12724e6463765092ff24cb9c077c234ad16f9678->enter($__internal_d895e7fe38acc7f6b498690f12724e6463765092ff24cb9c077c234ad16f9678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_6ed31911d2e12df8647f3aa8b9bc0b18520519240d7294529e033980465d3f16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ed31911d2e12df8647f3aa8b9bc0b18520519240d7294529e033980465d3f16->enter($__internal_6ed31911d2e12df8647f3aa8b9bc0b18520519240d7294529e033980465d3f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_d895e7fe38acc7f6b498690f12724e6463765092ff24cb9c077c234ad16f9678->leave($__internal_d895e7fe38acc7f6b498690f12724e6463765092ff24cb9c077c234ad16f9678_prof);

        
        $__internal_6ed31911d2e12df8647f3aa8b9bc0b18520519240d7294529e033980465d3f16->leave($__internal_6ed31911d2e12df8647f3aa8b9bc0b18520519240d7294529e033980465d3f16_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_789af5ba1bcf085f1613dccadd79e6e67a3b2d4dd9c83f90d2280d6b3d6a1f16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_789af5ba1bcf085f1613dccadd79e6e67a3b2d4dd9c83f90d2280d6b3d6a1f16->enter($__internal_789af5ba1bcf085f1613dccadd79e6e67a3b2d4dd9c83f90d2280d6b3d6a1f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_2c224f1c2deea952099c8b5b885f574b3b18cb8f8aa3e06580e99fda9ac04e05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c224f1c2deea952099c8b5b885f574b3b18cb8f8aa3e06580e99fda9ac04e05->enter($__internal_2c224f1c2deea952099c8b5b885f574b3b18cb8f8aa3e06580e99fda9ac04e05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_2c224f1c2deea952099c8b5b885f574b3b18cb8f8aa3e06580e99fda9ac04e05->leave($__internal_2c224f1c2deea952099c8b5b885f574b3b18cb8f8aa3e06580e99fda9ac04e05_prof);

        
        $__internal_789af5ba1bcf085f1613dccadd79e6e67a3b2d4dd9c83f90d2280d6b3d6a1f16->leave($__internal_789af5ba1bcf085f1613dccadd79e6e67a3b2d4dd9c83f90d2280d6b3d6a1f16_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_ca43f9bb5446302b5c76c61d4bc5b587f6e9b25071cda688f0fe4cc969a58d2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca43f9bb5446302b5c76c61d4bc5b587f6e9b25071cda688f0fe4cc969a58d2f->enter($__internal_ca43f9bb5446302b5c76c61d4bc5b587f6e9b25071cda688f0fe4cc969a58d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_211b157a9b526d9efd213d3b0f54a821e4b810b46d173595d72f86e2b3cee3cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_211b157a9b526d9efd213d3b0f54a821e4b810b46d173595d72f86e2b3cee3cf->enter($__internal_211b157a9b526d9efd213d3b0f54a821e4b810b46d173595d72f86e2b3cee3cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_211b157a9b526d9efd213d3b0f54a821e4b810b46d173595d72f86e2b3cee3cf->leave($__internal_211b157a9b526d9efd213d3b0f54a821e4b810b46d173595d72f86e2b3cee3cf_prof);

        
        $__internal_ca43f9bb5446302b5c76c61d4bc5b587f6e9b25071cda688f0fe4cc969a58d2f->leave($__internal_ca43f9bb5446302b5c76c61d4bc5b587f6e9b25071cda688f0fe4cc969a58d2f_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_d7b4993077502f070b6267f1f9df3cbf8c25bd180b07b62e0f36cbd5b99576c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7b4993077502f070b6267f1f9df3cbf8c25bd180b07b62e0f36cbd5b99576c2->enter($__internal_d7b4993077502f070b6267f1f9df3cbf8c25bd180b07b62e0f36cbd5b99576c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_0763cfcd9d133d2f10d5d1f80d328edcbb3fbe876ddd982b67bec5804574a8b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0763cfcd9d133d2f10d5d1f80d328edcbb3fbe876ddd982b67bec5804574a8b2->enter($__internal_0763cfcd9d133d2f10d5d1f80d328edcbb3fbe876ddd982b67bec5804574a8b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_0763cfcd9d133d2f10d5d1f80d328edcbb3fbe876ddd982b67bec5804574a8b2->leave($__internal_0763cfcd9d133d2f10d5d1f80d328edcbb3fbe876ddd982b67bec5804574a8b2_prof);

        
        $__internal_d7b4993077502f070b6267f1f9df3cbf8c25bd180b07b62e0f36cbd5b99576c2->leave($__internal_d7b4993077502f070b6267f1f9df3cbf8c25bd180b07b62e0f36cbd5b99576c2_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_bcc38107c2c12991eb82f136495637747c5f780fd1e463d4790db85021fe905f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcc38107c2c12991eb82f136495637747c5f780fd1e463d4790db85021fe905f->enter($__internal_bcc38107c2c12991eb82f136495637747c5f780fd1e463d4790db85021fe905f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_4b4f97145b479558652c566675ab4edc3a024b8da22c36350374983d07e6bb67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b4f97145b479558652c566675ab4edc3a024b8da22c36350374983d07e6bb67->enter($__internal_4b4f97145b479558652c566675ab4edc3a024b8da22c36350374983d07e6bb67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_4b4f97145b479558652c566675ab4edc3a024b8da22c36350374983d07e6bb67->leave($__internal_4b4f97145b479558652c566675ab4edc3a024b8da22c36350374983d07e6bb67_prof);

        
        $__internal_bcc38107c2c12991eb82f136495637747c5f780fd1e463d4790db85021fe905f->leave($__internal_bcc38107c2c12991eb82f136495637747c5f780fd1e463d4790db85021fe905f_prof);

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
", "form_table_layout.html.twig", "/Users/Rachid/Documents/Projet Client/ulimprime/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/form_table_layout.html.twig");
    }
}
