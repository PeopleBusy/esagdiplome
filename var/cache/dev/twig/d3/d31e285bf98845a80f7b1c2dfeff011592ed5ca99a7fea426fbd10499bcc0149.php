<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_afcdb8821998075a7745c0abd753644a8f5f83d79c50d27a6ad49ab66ab0d382 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f806f6ada830db4615d8a0d81d122bb45df132e4b32ea0ade5be1019306f9fac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f806f6ada830db4615d8a0d81d122bb45df132e4b32ea0ade5be1019306f9fac->enter($__internal_f806f6ada830db4615d8a0d81d122bb45df132e4b32ea0ade5be1019306f9fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_2a6c7e454de4a1908294e15bac0b7a7f1fc648ce3547e5a8341116529740981f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a6c7e454de4a1908294e15bac0b7a7f1fc648ce3547e5a8341116529740981f->enter($__internal_2a6c7e454de4a1908294e15bac0b7a7f1fc648ce3547e5a8341116529740981f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_f806f6ada830db4615d8a0d81d122bb45df132e4b32ea0ade5be1019306f9fac->leave($__internal_f806f6ada830db4615d8a0d81d122bb45df132e4b32ea0ade5be1019306f9fac_prof);

        
        $__internal_2a6c7e454de4a1908294e15bac0b7a7f1fc648ce3547e5a8341116529740981f->leave($__internal_2a6c7e454de4a1908294e15bac0b7a7f1fc648ce3547e5a8341116529740981f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/Users/Rachid/Documents/Projet Client/ulimprime/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
