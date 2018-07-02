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
        $__internal_dcd9024b9b5ee6cf5d1490bd3d12b6eb2f814e90590b539260099e6346923c7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcd9024b9b5ee6cf5d1490bd3d12b6eb2f814e90590b539260099e6346923c7f->enter($__internal_dcd9024b9b5ee6cf5d1490bd3d12b6eb2f814e90590b539260099e6346923c7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_4c9b6f78930fa91c0cf7edaf822d407ca6a614de2fbad24638170a055d6d6d59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c9b6f78930fa91c0cf7edaf822d407ca6a614de2fbad24638170a055d6d6d59->enter($__internal_4c9b6f78930fa91c0cf7edaf822d407ca6a614de2fbad24638170a055d6d6d59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dcd9024b9b5ee6cf5d1490bd3d12b6eb2f814e90590b539260099e6346923c7f->leave($__internal_dcd9024b9b5ee6cf5d1490bd3d12b6eb2f814e90590b539260099e6346923c7f_prof);

        
        $__internal_4c9b6f78930fa91c0cf7edaf822d407ca6a614de2fbad24638170a055d6d6d59->leave($__internal_4c9b6f78930fa91c0cf7edaf822d407ca6a614de2fbad24638170a055d6d6d59_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_04bb57a25966d4e6b7574220b5d10fd8e1846928f7b82d16126934730fb770f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04bb57a25966d4e6b7574220b5d10fd8e1846928f7b82d16126934730fb770f4->enter($__internal_04bb57a25966d4e6b7574220b5d10fd8e1846928f7b82d16126934730fb770f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b8a4b8b7ab53b5632d0c48d91446b31bd8ea31087fc8fbc3b54dc5414f2d79b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a4b8b7ab53b5632d0c48d91446b31bd8ea31087fc8fbc3b54dc5414f2d79b3->enter($__internal_b8a4b8b7ab53b5632d0c48d91446b31bd8ea31087fc8fbc3b54dc5414f2d79b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_b8a4b8b7ab53b5632d0c48d91446b31bd8ea31087fc8fbc3b54dc5414f2d79b3->leave($__internal_b8a4b8b7ab53b5632d0c48d91446b31bd8ea31087fc8fbc3b54dc5414f2d79b3_prof);

        
        $__internal_04bb57a25966d4e6b7574220b5d10fd8e1846928f7b82d16126934730fb770f4->leave($__internal_04bb57a25966d4e6b7574220b5d10fd8e1846928f7b82d16126934730fb770f4_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e61c22e33712abcea6e65e3c4d07b5386e3f0bc8afcd803f6b67771f1ff7506 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e61c22e33712abcea6e65e3c4d07b5386e3f0bc8afcd803f6b67771f1ff7506->enter($__internal_9e61c22e33712abcea6e65e3c4d07b5386e3f0bc8afcd803f6b67771f1ff7506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_012e3179cee45612797d3ac9c4865b9536d654adbc2055166cee73a34ea92830 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_012e3179cee45612797d3ac9c4865b9536d654adbc2055166cee73a34ea92830->enter($__internal_012e3179cee45612797d3ac9c4865b9536d654adbc2055166cee73a34ea92830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_012e3179cee45612797d3ac9c4865b9536d654adbc2055166cee73a34ea92830->leave($__internal_012e3179cee45612797d3ac9c4865b9536d654adbc2055166cee73a34ea92830_prof);

        
        $__internal_9e61c22e33712abcea6e65e3c4d07b5386e3f0bc8afcd803f6b67771f1ff7506->leave($__internal_9e61c22e33712abcea6e65e3c4d07b5386e3f0bc8afcd803f6b67771f1ff7506_prof);

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
", "WebProfilerBundle:Profiler:open.html.twig", "/Users/Rachid/SymfonyProjects/esagdiplome/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
