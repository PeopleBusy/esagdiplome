<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_a05233c31873a2c7a602c8c33937db8c6f18d1c7b22a7be75fecd8e7140fb33f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9ea056a3f5affb88557d9dcf30b700212379c89d1da83d3f4259b3828605de02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ea056a3f5affb88557d9dcf30b700212379c89d1da83d3f4259b3828605de02->enter($__internal_9ea056a3f5affb88557d9dcf30b700212379c89d1da83d3f4259b3828605de02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_dfa7d3701680452356a086cd45bb7b7fb26eeac5e28dc6800d68011d8f396ca3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfa7d3701680452356a086cd45bb7b7fb26eeac5e28dc6800d68011d8f396ca3->enter($__internal_dfa7d3701680452356a086cd45bb7b7fb26eeac5e28dc6800d68011d8f396ca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ea056a3f5affb88557d9dcf30b700212379c89d1da83d3f4259b3828605de02->leave($__internal_9ea056a3f5affb88557d9dcf30b700212379c89d1da83d3f4259b3828605de02_prof);

        
        $__internal_dfa7d3701680452356a086cd45bb7b7fb26eeac5e28dc6800d68011d8f396ca3->leave($__internal_dfa7d3701680452356a086cd45bb7b7fb26eeac5e28dc6800d68011d8f396ca3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e7fe0621cf927f5a959b71b2a5b95dfbc4bce3b80b7d2eb82a7edbba9259a8e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7fe0621cf927f5a959b71b2a5b95dfbc4bce3b80b7d2eb82a7edbba9259a8e7->enter($__internal_e7fe0621cf927f5a959b71b2a5b95dfbc4bce3b80b7d2eb82a7edbba9259a8e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_81dbf1b0c3ece56141351b78b0cce8b265b17e6a99dd25d9a5ea4b3cac90929c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81dbf1b0c3ece56141351b78b0cce8b265b17e6a99dd25d9a5ea4b3cac90929c->enter($__internal_81dbf1b0c3ece56141351b78b0cce8b265b17e6a99dd25d9a5ea4b3cac90929c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_81dbf1b0c3ece56141351b78b0cce8b265b17e6a99dd25d9a5ea4b3cac90929c->leave($__internal_81dbf1b0c3ece56141351b78b0cce8b265b17e6a99dd25d9a5ea4b3cac90929c_prof);

        
        $__internal_e7fe0621cf927f5a959b71b2a5b95dfbc4bce3b80b7d2eb82a7edbba9259a8e7->leave($__internal_e7fe0621cf927f5a959b71b2a5b95dfbc4bce3b80b7d2eb82a7edbba9259a8e7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "/Users/Rachid/Documents/Projet Client/ulimprime/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
