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
        $__internal_b48a53ca91a446d7454a01f49403770a922808db0f7858487f6f8bfd9f446369 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b48a53ca91a446d7454a01f49403770a922808db0f7858487f6f8bfd9f446369->enter($__internal_b48a53ca91a446d7454a01f49403770a922808db0f7858487f6f8bfd9f446369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_07c5d55c60885a36fc71201397b00de82fe5a13e26736c80e647405a7cd0c242 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07c5d55c60885a36fc71201397b00de82fe5a13e26736c80e647405a7cd0c242->enter($__internal_07c5d55c60885a36fc71201397b00de82fe5a13e26736c80e647405a7cd0c242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b48a53ca91a446d7454a01f49403770a922808db0f7858487f6f8bfd9f446369->leave($__internal_b48a53ca91a446d7454a01f49403770a922808db0f7858487f6f8bfd9f446369_prof);

        
        $__internal_07c5d55c60885a36fc71201397b00de82fe5a13e26736c80e647405a7cd0c242->leave($__internal_07c5d55c60885a36fc71201397b00de82fe5a13e26736c80e647405a7cd0c242_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_113aa41e1a48d4d92e054a0b2289b4270bf773141d7bb91f040e8e8d7fa7af98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_113aa41e1a48d4d92e054a0b2289b4270bf773141d7bb91f040e8e8d7fa7af98->enter($__internal_113aa41e1a48d4d92e054a0b2289b4270bf773141d7bb91f040e8e8d7fa7af98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9b6ec6d14e320735ea69b161b56b2ab12f2b11a06dda0783b000d4632b13178b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b6ec6d14e320735ea69b161b56b2ab12f2b11a06dda0783b000d4632b13178b->enter($__internal_9b6ec6d14e320735ea69b161b56b2ab12f2b11a06dda0783b000d4632b13178b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9b6ec6d14e320735ea69b161b56b2ab12f2b11a06dda0783b000d4632b13178b->leave($__internal_9b6ec6d14e320735ea69b161b56b2ab12f2b11a06dda0783b000d4632b13178b_prof);

        
        $__internal_113aa41e1a48d4d92e054a0b2289b4270bf773141d7bb91f040e8e8d7fa7af98->leave($__internal_113aa41e1a48d4d92e054a0b2289b4270bf773141d7bb91f040e8e8d7fa7af98_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4cfed9a2d9c6faa165807ff87ee694921b45d11f26995c432d2c5196cbf495b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cfed9a2d9c6faa165807ff87ee694921b45d11f26995c432d2c5196cbf495b1->enter($__internal_4cfed9a2d9c6faa165807ff87ee694921b45d11f26995c432d2c5196cbf495b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_24a146f95970d4a04adf1940424b46fb9e841232673aaf0f931b5c54d5df246a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24a146f95970d4a04adf1940424b46fb9e841232673aaf0f931b5c54d5df246a->enter($__internal_24a146f95970d4a04adf1940424b46fb9e841232673aaf0f931b5c54d5df246a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_24a146f95970d4a04adf1940424b46fb9e841232673aaf0f931b5c54d5df246a->leave($__internal_24a146f95970d4a04adf1940424b46fb9e841232673aaf0f931b5c54d5df246a_prof);

        
        $__internal_4cfed9a2d9c6faa165807ff87ee694921b45d11f26995c432d2c5196cbf495b1->leave($__internal_4cfed9a2d9c6faa165807ff87ee694921b45d11f26995c432d2c5196cbf495b1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e4b2276b9fdd62f0aaf5a82f83714ad39887faf95fea22a20a223ebe6a4d50b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4b2276b9fdd62f0aaf5a82f83714ad39887faf95fea22a20a223ebe6a4d50b2->enter($__internal_e4b2276b9fdd62f0aaf5a82f83714ad39887faf95fea22a20a223ebe6a4d50b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b23cd04d70ba52e1d2e1925a7b9fd71cb4db081adccc1b0146a9ac0b8ecf1b66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b23cd04d70ba52e1d2e1925a7b9fd71cb4db081adccc1b0146a9ac0b8ecf1b66->enter($__internal_b23cd04d70ba52e1d2e1925a7b9fd71cb4db081adccc1b0146a9ac0b8ecf1b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b23cd04d70ba52e1d2e1925a7b9fd71cb4db081adccc1b0146a9ac0b8ecf1b66->leave($__internal_b23cd04d70ba52e1d2e1925a7b9fd71cb4db081adccc1b0146a9ac0b8ecf1b66_prof);

        
        $__internal_e4b2276b9fdd62f0aaf5a82f83714ad39887faf95fea22a20a223ebe6a4d50b2->leave($__internal_e4b2276b9fdd62f0aaf5a82f83714ad39887faf95fea22a20a223ebe6a4d50b2_prof);

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
", "WebProfilerBundle:Collector:router.html.twig", "/Users/Rachid/SymfonyProjects/esagdiplome/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
