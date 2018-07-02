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
        $__internal_61dd9d5ed7919d1610a1f6f806be98f58a8a7ad90fe800cc5a7c4157f4db5b8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61dd9d5ed7919d1610a1f6f806be98f58a8a7ad90fe800cc5a7c4157f4db5b8d->enter($__internal_61dd9d5ed7919d1610a1f6f806be98f58a8a7ad90fe800cc5a7c4157f4db5b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_e83508229bf257296e58dee2041b80f06fbff60b9c8b6ff72f8efc541618853f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e83508229bf257296e58dee2041b80f06fbff60b9c8b6ff72f8efc541618853f->enter($__internal_e83508229bf257296e58dee2041b80f06fbff60b9c8b6ff72f8efc541618853f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_61dd9d5ed7919d1610a1f6f806be98f58a8a7ad90fe800cc5a7c4157f4db5b8d->leave($__internal_61dd9d5ed7919d1610a1f6f806be98f58a8a7ad90fe800cc5a7c4157f4db5b8d_prof);

        
        $__internal_e83508229bf257296e58dee2041b80f06fbff60b9c8b6ff72f8efc541618853f->leave($__internal_e83508229bf257296e58dee2041b80f06fbff60b9c8b6ff72f8efc541618853f_prof);

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
", "TwigBundle:Exception:error.rdf.twig", "/Users/Rachid/SymfonyProjects/esagdiplome/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
