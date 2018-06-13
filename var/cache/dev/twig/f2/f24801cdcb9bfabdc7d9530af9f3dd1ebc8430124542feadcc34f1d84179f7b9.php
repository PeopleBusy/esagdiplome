<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_54b4561a3fe1b5f6d91d31c2b8ae5ef4de0ab84b7815cc6243bda4acbb90bf0a extends Twig_Template
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
        $__internal_20e9a5da1e8b047b10f363fb82fd8d1341317fcb7c7cd600a4effea385af9573 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20e9a5da1e8b047b10f363fb82fd8d1341317fcb7c7cd600a4effea385af9573->enter($__internal_20e9a5da1e8b047b10f363fb82fd8d1341317fcb7c7cd600a4effea385af9573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_e2d917867c4d1045ddbb0d0da6276e321570262c38455a7f03cd8362bca0f301 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2d917867c4d1045ddbb0d0da6276e321570262c38455a7f03cd8362bca0f301->enter($__internal_e2d917867c4d1045ddbb0d0da6276e321570262c38455a7f03cd8362bca0f301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_20e9a5da1e8b047b10f363fb82fd8d1341317fcb7c7cd600a4effea385af9573->leave($__internal_20e9a5da1e8b047b10f363fb82fd8d1341317fcb7c7cd600a4effea385af9573_prof);

        
        $__internal_e2d917867c4d1045ddbb0d0da6276e321570262c38455a7f03cd8362bca0f301->leave($__internal_e2d917867c4d1045ddbb0d0da6276e321570262c38455a7f03cd8362bca0f301_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "/Users/Rachid/Documents/Projet Client/ulimprime/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
