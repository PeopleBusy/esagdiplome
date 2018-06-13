<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_f7c439d73aeea9cf66b0f64ae6ea47c1c1e8e566ad8d5f062b25432dce9386bd extends Twig_Template
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
        $__internal_6845729c8ee014b1bb10ed04d75d1ad18418f42b1d95328a63667fa469f4a585 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6845729c8ee014b1bb10ed04d75d1ad18418f42b1d95328a63667fa469f4a585->enter($__internal_6845729c8ee014b1bb10ed04d75d1ad18418f42b1d95328a63667fa469f4a585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_69d3de83114c860c6bd398a319b91e667774690e888cea01f9708e7a440c4e33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69d3de83114c860c6bd398a319b91e667774690e888cea01f9708e7a440c4e33->enter($__internal_69d3de83114c860c6bd398a319b91e667774690e888cea01f9708e7a440c4e33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_6845729c8ee014b1bb10ed04d75d1ad18418f42b1d95328a63667fa469f4a585->leave($__internal_6845729c8ee014b1bb10ed04d75d1ad18418f42b1d95328a63667fa469f4a585_prof);

        
        $__internal_69d3de83114c860c6bd398a319b91e667774690e888cea01f9708e7a440c4e33->leave($__internal_69d3de83114c860c6bd398a319b91e667774690e888cea01f9708e7a440c4e33_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "/Users/Rachid/Documents/Projet Client/ulimprime/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
