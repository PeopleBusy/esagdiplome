<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_67210b46eb6ea29047a65b9b0be637713427b54db75c36dff6e9e82ed4165885 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3fce5c6b20180127f19c07b801019227c576474395d7f31a8a8414baa8fe4961 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fce5c6b20180127f19c07b801019227c576474395d7f31a8a8414baa8fe4961->enter($__internal_3fce5c6b20180127f19c07b801019227c576474395d7f31a8a8414baa8fe4961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_2eaab528784a2334916a4dd905696a102d763b6b5d94b4595a133ba61080ebd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eaab528784a2334916a4dd905696a102d763b6b5d94b4595a133ba61080ebd1->enter($__internal_2eaab528784a2334916a4dd905696a102d763b6b5d94b4595a133ba61080ebd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fce5c6b20180127f19c07b801019227c576474395d7f31a8a8414baa8fe4961->leave($__internal_3fce5c6b20180127f19c07b801019227c576474395d7f31a8a8414baa8fe4961_prof);

        
        $__internal_2eaab528784a2334916a4dd905696a102d763b6b5d94b4595a133ba61080ebd1->leave($__internal_2eaab528784a2334916a4dd905696a102d763b6b5d94b4595a133ba61080ebd1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8cab59cbe33731da987af1b696b099f047cde886535eeca6ffc11185a7fe0d01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cab59cbe33731da987af1b696b099f047cde886535eeca6ffc11185a7fe0d01->enter($__internal_8cab59cbe33731da987af1b696b099f047cde886535eeca6ffc11185a7fe0d01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d74e9f4ef9c045218da22d49a34f5df5b6170ad7e3a4d3b73243acfcbe7b688a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d74e9f4ef9c045218da22d49a34f5df5b6170ad7e3a4d3b73243acfcbe7b688a->enter($__internal_d74e9f4ef9c045218da22d49a34f5df5b6170ad7e3a4d3b73243acfcbe7b688a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d74e9f4ef9c045218da22d49a34f5df5b6170ad7e3a4d3b73243acfcbe7b688a->leave($__internal_d74e9f4ef9c045218da22d49a34f5df5b6170ad7e3a4d3b73243acfcbe7b688a_prof);

        
        $__internal_8cab59cbe33731da987af1b696b099f047cde886535eeca6ffc11185a7fe0d01->leave($__internal_8cab59cbe33731da987af1b696b099f047cde886535eeca6ffc11185a7fe0d01_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c8d4d3a76adb1c7184f1143ade327c642a3c372723de5e3c8bbd3722086ab0b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8d4d3a76adb1c7184f1143ade327c642a3c372723de5e3c8bbd3722086ab0b1->enter($__internal_c8d4d3a76adb1c7184f1143ade327c642a3c372723de5e3c8bbd3722086ab0b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bd11ac59f7443a5445591670e495380e9282dea811d82ee489bf4351839adba8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd11ac59f7443a5445591670e495380e9282dea811d82ee489bf4351839adba8->enter($__internal_bd11ac59f7443a5445591670e495380e9282dea811d82ee489bf4351839adba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_bd11ac59f7443a5445591670e495380e9282dea811d82ee489bf4351839adba8->leave($__internal_bd11ac59f7443a5445591670e495380e9282dea811d82ee489bf4351839adba8_prof);

        
        $__internal_c8d4d3a76adb1c7184f1143ade327c642a3c372723de5e3c8bbd3722086ab0b1->leave($__internal_c8d4d3a76adb1c7184f1143ade327c642a3c372723de5e3c8bbd3722086ab0b1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Users/Rachid/SymfonyProjects/esagdiplome/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
