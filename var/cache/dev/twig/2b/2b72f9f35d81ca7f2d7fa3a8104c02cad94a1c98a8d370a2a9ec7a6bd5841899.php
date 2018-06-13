<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_6bdc415026468751b0fd3b8ea4bb5b8b9e992dbfca85e1c86f20068b91fbe660 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0b642b271822b6077006f99f006b0ab8865f5433b18c730629764f216ecabaae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b642b271822b6077006f99f006b0ab8865f5433b18c730629764f216ecabaae->enter($__internal_0b642b271822b6077006f99f006b0ab8865f5433b18c730629764f216ecabaae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_cd809c37a481513835ac75da84ae23cd3b7b32bf0857d113835308b5dc80c1ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd809c37a481513835ac75da84ae23cd3b7b32bf0857d113835308b5dc80c1ba->enter($__internal_cd809c37a481513835ac75da84ae23cd3b7b32bf0857d113835308b5dc80c1ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b642b271822b6077006f99f006b0ab8865f5433b18c730629764f216ecabaae->leave($__internal_0b642b271822b6077006f99f006b0ab8865f5433b18c730629764f216ecabaae_prof);

        
        $__internal_cd809c37a481513835ac75da84ae23cd3b7b32bf0857d113835308b5dc80c1ba->leave($__internal_cd809c37a481513835ac75da84ae23cd3b7b32bf0857d113835308b5dc80c1ba_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_175a435704dd6d2385c6aec573a758272538b1ddc71cf1e46e2cd7ed13de13d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_175a435704dd6d2385c6aec573a758272538b1ddc71cf1e46e2cd7ed13de13d3->enter($__internal_175a435704dd6d2385c6aec573a758272538b1ddc71cf1e46e2cd7ed13de13d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_90c577f936e1dd5292c9e40e0ac08226db06407ec503b3e50b57cf50f1568f70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90c577f936e1dd5292c9e40e0ac08226db06407ec503b3e50b57cf50f1568f70->enter($__internal_90c577f936e1dd5292c9e40e0ac08226db06407ec503b3e50b57cf50f1568f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_90c577f936e1dd5292c9e40e0ac08226db06407ec503b3e50b57cf50f1568f70->leave($__internal_90c577f936e1dd5292c9e40e0ac08226db06407ec503b3e50b57cf50f1568f70_prof);

        
        $__internal_175a435704dd6d2385c6aec573a758272538b1ddc71cf1e46e2cd7ed13de13d3->leave($__internal_175a435704dd6d2385c6aec573a758272538b1ddc71cf1e46e2cd7ed13de13d3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c2ac331045acf8764b36b98b4bc5ddd832ec8d563b934425a5e8ec0ce30b184f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2ac331045acf8764b36b98b4bc5ddd832ec8d563b934425a5e8ec0ce30b184f->enter($__internal_c2ac331045acf8764b36b98b4bc5ddd832ec8d563b934425a5e8ec0ce30b184f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b1eb5c791ecf141c0b61366d6303a5e12abbe57eb09fc8b3a79086f91e02c6c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1eb5c791ecf141c0b61366d6303a5e12abbe57eb09fc8b3a79086f91e02c6c9->enter($__internal_b1eb5c791ecf141c0b61366d6303a5e12abbe57eb09fc8b3a79086f91e02c6c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b1eb5c791ecf141c0b61366d6303a5e12abbe57eb09fc8b3a79086f91e02c6c9->leave($__internal_b1eb5c791ecf141c0b61366d6303a5e12abbe57eb09fc8b3a79086f91e02c6c9_prof);

        
        $__internal_c2ac331045acf8764b36b98b4bc5ddd832ec8d563b934425a5e8ec0ce30b184f->leave($__internal_c2ac331045acf8764b36b98b4bc5ddd832ec8d563b934425a5e8ec0ce30b184f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2d14f079f395c8dbf95111a558e0a51b71cd2111abeab1df5b698086304e45d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d14f079f395c8dbf95111a558e0a51b71cd2111abeab1df5b698086304e45d2->enter($__internal_2d14f079f395c8dbf95111a558e0a51b71cd2111abeab1df5b698086304e45d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_010be2b3698626e1c3ad521e374424697c4c64cf921d657b00644e64d00b9468 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_010be2b3698626e1c3ad521e374424697c4c64cf921d657b00644e64d00b9468->enter($__internal_010be2b3698626e1c3ad521e374424697c4c64cf921d657b00644e64d00b9468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_010be2b3698626e1c3ad521e374424697c4c64cf921d657b00644e64d00b9468->leave($__internal_010be2b3698626e1c3ad521e374424697c4c64cf921d657b00644e64d00b9468_prof);

        
        $__internal_2d14f079f395c8dbf95111a558e0a51b71cd2111abeab1df5b698086304e45d2->leave($__internal_2d14f079f395c8dbf95111a558e0a51b71cd2111abeab1df5b698086304e45d2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/Users/Rachid/Documents/Projet Client/ulimprime/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
