<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_fcffe5d8c8ed1cfa381e3dd3a852bd47bd2a45710ab8e26fa9db2821d5b17f03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_30e3287a11d89ccb7a9134afcaad818ae4e6d60c2f35f05d7d99e20cafdcb822 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30e3287a11d89ccb7a9134afcaad818ae4e6d60c2f35f05d7d99e20cafdcb822->enter($__internal_30e3287a11d89ccb7a9134afcaad818ae4e6d60c2f35f05d7d99e20cafdcb822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_e1160e6d1a6e6398d6afb7daa54cc7026af63031e4185f2e522d087f2011704e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1160e6d1a6e6398d6afb7daa54cc7026af63031e4185f2e522d087f2011704e->enter($__internal_e1160e6d1a6e6398d6afb7daa54cc7026af63031e4185f2e522d087f2011704e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_30e3287a11d89ccb7a9134afcaad818ae4e6d60c2f35f05d7d99e20cafdcb822->leave($__internal_30e3287a11d89ccb7a9134afcaad818ae4e6d60c2f35f05d7d99e20cafdcb822_prof);

        
        $__internal_e1160e6d1a6e6398d6afb7daa54cc7026af63031e4185f2e522d087f2011704e->leave($__internal_e1160e6d1a6e6398d6afb7daa54cc7026af63031e4185f2e522d087f2011704e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_cbb341499f7281cc14709c586a85bf2274c0c85b74df51e46ba035aa18598921 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbb341499f7281cc14709c586a85bf2274c0c85b74df51e46ba035aa18598921->enter($__internal_cbb341499f7281cc14709c586a85bf2274c0c85b74df51e46ba035aa18598921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ee56810b55e3ab7e03f1293ea206d8070367dec31661510fdc8addfb87f9b8bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee56810b55e3ab7e03f1293ea206d8070367dec31661510fdc8addfb87f9b8bf->enter($__internal_ee56810b55e3ab7e03f1293ea206d8070367dec31661510fdc8addfb87f9b8bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ee56810b55e3ab7e03f1293ea206d8070367dec31661510fdc8addfb87f9b8bf->leave($__internal_ee56810b55e3ab7e03f1293ea206d8070367dec31661510fdc8addfb87f9b8bf_prof);

        
        $__internal_cbb341499f7281cc14709c586a85bf2274c0c85b74df51e46ba035aa18598921->leave($__internal_cbb341499f7281cc14709c586a85bf2274c0c85b74df51e46ba035aa18598921_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Users/Rachid/Documents/Projet Client/ulimprime/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
