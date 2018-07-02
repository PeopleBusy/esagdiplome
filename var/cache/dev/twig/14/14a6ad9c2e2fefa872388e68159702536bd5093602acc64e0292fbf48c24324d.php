<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_3d8a03a1f444dd2eecae034b7d3394a80be29ccf07747649e8f7890c4b9beedf extends Twig_Template
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
        $__internal_0fafb583be588333f43d0959d603c0408212741b6bbb5d033809d092550a78ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fafb583be588333f43d0959d603c0408212741b6bbb5d033809d092550a78ae->enter($__internal_0fafb583be588333f43d0959d603c0408212741b6bbb5d033809d092550a78ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_35e11f71500fbd5153f59cfc87fac365b72dcbb1105bd4c133fcbcbd9606f2ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35e11f71500fbd5153f59cfc87fac365b72dcbb1105bd4c133fcbcbd9606f2ab->enter($__internal_35e11f71500fbd5153f59cfc87fac365b72dcbb1105bd4c133fcbcbd9606f2ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_0fafb583be588333f43d0959d603c0408212741b6bbb5d033809d092550a78ae->leave($__internal_0fafb583be588333f43d0959d603c0408212741b6bbb5d033809d092550a78ae_prof);

        
        $__internal_35e11f71500fbd5153f59cfc87fac365b72dcbb1105bd4c133fcbcbd9606f2ab->leave($__internal_35e11f71500fbd5153f59cfc87fac365b72dcbb1105bd4c133fcbcbd9606f2ab_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "/Users/Rachid/SymfonyProjects/esagdiplome/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
