<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_c87710f357776402c9631da4bda3850b78ef8adca6273d8bd36cbe5e2fe827f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_42dc97d0abf10c914cadd516d34493fa62a7cc7af96ebcdb97802b60b71a2ce5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42dc97d0abf10c914cadd516d34493fa62a7cc7af96ebcdb97802b60b71a2ce5->enter($__internal_42dc97d0abf10c914cadd516d34493fa62a7cc7af96ebcdb97802b60b71a2ce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_f21cb88116a694988ac70c50c040674a7f982b0947847b2a8591133f3c8c9226 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f21cb88116a694988ac70c50c040674a7f982b0947847b2a8591133f3c8c9226->enter($__internal_f21cb88116a694988ac70c50c040674a7f982b0947847b2a8591133f3c8c9226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42dc97d0abf10c914cadd516d34493fa62a7cc7af96ebcdb97802b60b71a2ce5->leave($__internal_42dc97d0abf10c914cadd516d34493fa62a7cc7af96ebcdb97802b60b71a2ce5_prof);

        
        $__internal_f21cb88116a694988ac70c50c040674a7f982b0947847b2a8591133f3c8c9226->leave($__internal_f21cb88116a694988ac70c50c040674a7f982b0947847b2a8591133f3c8c9226_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d29742cfda6b3a3251e4411e80e2bf2714b1f3318db8f75bcb54ee360d7a395e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d29742cfda6b3a3251e4411e80e2bf2714b1f3318db8f75bcb54ee360d7a395e->enter($__internal_d29742cfda6b3a3251e4411e80e2bf2714b1f3318db8f75bcb54ee360d7a395e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1175bcc10adc5e11270896ca7a132111af39ba4e9385f666d5d913b379fd88ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1175bcc10adc5e11270896ca7a132111af39ba4e9385f666d5d913b379fd88ef->enter($__internal_1175bcc10adc5e11270896ca7a132111af39ba4e9385f666d5d913b379fd88ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_1175bcc10adc5e11270896ca7a132111af39ba4e9385f666d5d913b379fd88ef->leave($__internal_1175bcc10adc5e11270896ca7a132111af39ba4e9385f666d5d913b379fd88ef_prof);

        
        $__internal_d29742cfda6b3a3251e4411e80e2bf2714b1f3318db8f75bcb54ee360d7a395e->leave($__internal_d29742cfda6b3a3251e4411e80e2bf2714b1f3318db8f75bcb54ee360d7a395e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f9140570c81121d3d8cf22566feccf5378bff9e52818281428003707a37fc353 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9140570c81121d3d8cf22566feccf5378bff9e52818281428003707a37fc353->enter($__internal_f9140570c81121d3d8cf22566feccf5378bff9e52818281428003707a37fc353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f0129395a32bc09f4fad74a0dd31a227633c0132fe5acc0fe2106b35eb1f6cff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0129395a32bc09f4fad74a0dd31a227633c0132fe5acc0fe2106b35eb1f6cff->enter($__internal_f0129395a32bc09f4fad74a0dd31a227633c0132fe5acc0fe2106b35eb1f6cff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_f0129395a32bc09f4fad74a0dd31a227633c0132fe5acc0fe2106b35eb1f6cff->leave($__internal_f0129395a32bc09f4fad74a0dd31a227633c0132fe5acc0fe2106b35eb1f6cff_prof);

        
        $__internal_f9140570c81121d3d8cf22566feccf5378bff9e52818281428003707a37fc353->leave($__internal_f9140570c81121d3d8cf22566feccf5378bff9e52818281428003707a37fc353_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b4ef8e3e5524741860ecf69fea87716081e9fe3ffaa780d92d26e54511cfe182 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4ef8e3e5524741860ecf69fea87716081e9fe3ffaa780d92d26e54511cfe182->enter($__internal_b4ef8e3e5524741860ecf69fea87716081e9fe3ffaa780d92d26e54511cfe182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3c18bd983199feac4129c1457b8005301c154edb6de3fe699998589e4c29002e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c18bd983199feac4129c1457b8005301c154edb6de3fe699998589e4c29002e->enter($__internal_3c18bd983199feac4129c1457b8005301c154edb6de3fe699998589e4c29002e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_3c18bd983199feac4129c1457b8005301c154edb6de3fe699998589e4c29002e->leave($__internal_3c18bd983199feac4129c1457b8005301c154edb6de3fe699998589e4c29002e_prof);

        
        $__internal_b4ef8e3e5524741860ecf69fea87716081e9fe3ffaa780d92d26e54511cfe182->leave($__internal_b4ef8e3e5524741860ecf69fea87716081e9fe3ffaa780d92d26e54511cfe182_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/Users/Rachid/SymfonyProjects/esagdiplome/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
