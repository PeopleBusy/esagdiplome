<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_304397361907c1b885fe0207c9a1e59995f6f188804aa2ad2b2a5942f2d85a23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c51d877a7fc4c201b5333256472fa5cef5cbfd2eb901750e00b5849394052545 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c51d877a7fc4c201b5333256472fa5cef5cbfd2eb901750e00b5849394052545->enter($__internal_c51d877a7fc4c201b5333256472fa5cef5cbfd2eb901750e00b5849394052545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_9934dd650339d6a5ceb1f6abd45d1dbdcf2d97a81f64a01781ea185d89fd0f22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9934dd650339d6a5ceb1f6abd45d1dbdcf2d97a81f64a01781ea185d89fd0f22->enter($__internal_9934dd650339d6a5ceb1f6abd45d1dbdcf2d97a81f64a01781ea185d89fd0f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c51d877a7fc4c201b5333256472fa5cef5cbfd2eb901750e00b5849394052545->leave($__internal_c51d877a7fc4c201b5333256472fa5cef5cbfd2eb901750e00b5849394052545_prof);

        
        $__internal_9934dd650339d6a5ceb1f6abd45d1dbdcf2d97a81f64a01781ea185d89fd0f22->leave($__internal_9934dd650339d6a5ceb1f6abd45d1dbdcf2d97a81f64a01781ea185d89fd0f22_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_d87f4c41fd571668311b390cf8134e81a370bebf6b9a98a21bb6e93a34f662bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d87f4c41fd571668311b390cf8134e81a370bebf6b9a98a21bb6e93a34f662bb->enter($__internal_d87f4c41fd571668311b390cf8134e81a370bebf6b9a98a21bb6e93a34f662bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_a42d6d2b9ed822e0479fefc4cedf63dd5faa80a910e656040c8f43b8bdfd47bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a42d6d2b9ed822e0479fefc4cedf63dd5faa80a910e656040c8f43b8bdfd47bb->enter($__internal_a42d6d2b9ed822e0479fefc4cedf63dd5faa80a910e656040c8f43b8bdfd47bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_a42d6d2b9ed822e0479fefc4cedf63dd5faa80a910e656040c8f43b8bdfd47bb->leave($__internal_a42d6d2b9ed822e0479fefc4cedf63dd5faa80a910e656040c8f43b8bdfd47bb_prof);

        
        $__internal_d87f4c41fd571668311b390cf8134e81a370bebf6b9a98a21bb6e93a34f662bb->leave($__internal_d87f4c41fd571668311b390cf8134e81a370bebf6b9a98a21bb6e93a34f662bb_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e2133665c32f5f6deb8445faacba19d59c166267172353a92a089588131a69f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2133665c32f5f6deb8445faacba19d59c166267172353a92a089588131a69f8->enter($__internal_e2133665c32f5f6deb8445faacba19d59c166267172353a92a089588131a69f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ae73c5dc79a67f9ca4e9b65a1a787d006d5d6f0a44ab212d3f17d39f0e65bc7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae73c5dc79a67f9ca4e9b65a1a787d006d5d6f0a44ab212d3f17d39f0e65bc7d->enter($__internal_ae73c5dc79a67f9ca4e9b65a1a787d006d5d6f0a44ab212d3f17d39f0e65bc7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_ae73c5dc79a67f9ca4e9b65a1a787d006d5d6f0a44ab212d3f17d39f0e65bc7d->leave($__internal_ae73c5dc79a67f9ca4e9b65a1a787d006d5d6f0a44ab212d3f17d39f0e65bc7d_prof);

        
        $__internal_e2133665c32f5f6deb8445faacba19d59c166267172353a92a089588131a69f8->leave($__internal_e2133665c32f5f6deb8445faacba19d59c166267172353a92a089588131a69f8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
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

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/Users/Rachid/Documents/Projet Client/ulimprime/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
