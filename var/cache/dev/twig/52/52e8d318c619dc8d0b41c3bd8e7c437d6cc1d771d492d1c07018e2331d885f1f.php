<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_62b5f07a84b2f46ebe4d4f975dc098357105d6285dbbc1f605b3b8c40d59836e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_786ec3c73e58461e4161b7030410f9eec334db3af21f8aadf48da80ddd7cda11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_786ec3c73e58461e4161b7030410f9eec334db3af21f8aadf48da80ddd7cda11->enter($__internal_786ec3c73e58461e4161b7030410f9eec334db3af21f8aadf48da80ddd7cda11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_f22fb0e0a75eb9722bb6add488cc24fe06405bddcafe4e36687681d318c29c86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f22fb0e0a75eb9722bb6add488cc24fe06405bddcafe4e36687681d318c29c86->enter($__internal_f22fb0e0a75eb9722bb6add488cc24fe06405bddcafe4e36687681d318c29c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_786ec3c73e58461e4161b7030410f9eec334db3af21f8aadf48da80ddd7cda11->leave($__internal_786ec3c73e58461e4161b7030410f9eec334db3af21f8aadf48da80ddd7cda11_prof);

        
        $__internal_f22fb0e0a75eb9722bb6add488cc24fe06405bddcafe4e36687681d318c29c86->leave($__internal_f22fb0e0a75eb9722bb6add488cc24fe06405bddcafe4e36687681d318c29c86_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b6808a0bedd76a6da9a829d03f0db73d35d5eba8a6f79966b666f066e2a796a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6808a0bedd76a6da9a829d03f0db73d35d5eba8a6f79966b666f066e2a796a1->enter($__internal_b6808a0bedd76a6da9a829d03f0db73d35d5eba8a6f79966b666f066e2a796a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7b2ae9e3a18e19e30bbadb0b95bd2c9497d5c5f24404c9227760c8e2d8faeec0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b2ae9e3a18e19e30bbadb0b95bd2c9497d5c5f24404c9227760c8e2d8faeec0->enter($__internal_7b2ae9e3a18e19e30bbadb0b95bd2c9497d5c5f24404c9227760c8e2d8faeec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_7b2ae9e3a18e19e30bbadb0b95bd2c9497d5c5f24404c9227760c8e2d8faeec0->leave($__internal_7b2ae9e3a18e19e30bbadb0b95bd2c9497d5c5f24404c9227760c8e2d8faeec0_prof);

        
        $__internal_b6808a0bedd76a6da9a829d03f0db73d35d5eba8a6f79966b666f066e2a796a1->leave($__internal_b6808a0bedd76a6da9a829d03f0db73d35d5eba8a6f79966b666f066e2a796a1_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_7fb544e1c1a6e77a7a0ccb3ca19abaaeebaee944bff1048f9ac6ffe3005f93d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fb544e1c1a6e77a7a0ccb3ca19abaaeebaee944bff1048f9ac6ffe3005f93d8->enter($__internal_7fb544e1c1a6e77a7a0ccb3ca19abaaeebaee944bff1048f9ac6ffe3005f93d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eb5591dec2b18fdf0e57d3764d8633e5044ab76796015e1b9564a26da753213b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb5591dec2b18fdf0e57d3764d8633e5044ab76796015e1b9564a26da753213b->enter($__internal_eb5591dec2b18fdf0e57d3764d8633e5044ab76796015e1b9564a26da753213b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_eb5591dec2b18fdf0e57d3764d8633e5044ab76796015e1b9564a26da753213b->leave($__internal_eb5591dec2b18fdf0e57d3764d8633e5044ab76796015e1b9564a26da753213b_prof);

        
        $__internal_7fb544e1c1a6e77a7a0ccb3ca19abaaeebaee944bff1048f9ac6ffe3005f93d8->leave($__internal_7fb544e1c1a6e77a7a0ccb3ca19abaaeebaee944bff1048f9ac6ffe3005f93d8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/Users/Rachid/Documents/Projet Client/ulimprime/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
