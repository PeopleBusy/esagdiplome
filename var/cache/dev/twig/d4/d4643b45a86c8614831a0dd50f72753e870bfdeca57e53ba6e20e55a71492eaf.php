<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_d01198bee842d36ae295efbab281b09824211d1a2ba12b297d929c389ec8e21a extends Twig_Template
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
        $__internal_ab81ed057808efc9da022f5281bcd6bd40dc36dc7e1bc6ce5d96fdf7d151cd89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab81ed057808efc9da022f5281bcd6bd40dc36dc7e1bc6ce5d96fdf7d151cd89->enter($__internal_ab81ed057808efc9da022f5281bcd6bd40dc36dc7e1bc6ce5d96fdf7d151cd89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_d6dd56821f460c2838ccae6ae6c8a98eb214f2f4920eb925a1cc9c53fd1bbe32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6dd56821f460c2838ccae6ae6c8a98eb214f2f4920eb925a1cc9c53fd1bbe32->enter($__internal_d6dd56821f460c2838ccae6ae6c8a98eb214f2f4920eb925a1cc9c53fd1bbe32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_ab81ed057808efc9da022f5281bcd6bd40dc36dc7e1bc6ce5d96fdf7d151cd89->leave($__internal_ab81ed057808efc9da022f5281bcd6bd40dc36dc7e1bc6ce5d96fdf7d151cd89_prof);

        
        $__internal_d6dd56821f460c2838ccae6ae6c8a98eb214f2f4920eb925a1cc9c53fd1bbe32->leave($__internal_d6dd56821f460c2838ccae6ae6c8a98eb214f2f4920eb925a1cc9c53fd1bbe32_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "/Users/Rachid/Documents/Projet Client/ulimprime/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
