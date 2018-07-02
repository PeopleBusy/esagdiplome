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
        $__internal_8c490568a1c44ec7db89af158f19fb1bd995af70dc8a351e6eab3d7d0cf53907 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c490568a1c44ec7db89af158f19fb1bd995af70dc8a351e6eab3d7d0cf53907->enter($__internal_8c490568a1c44ec7db89af158f19fb1bd995af70dc8a351e6eab3d7d0cf53907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_e75775cd074bd2539001606997b3b9aeb44e744fa35cd7007c71d4a211264c6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e75775cd074bd2539001606997b3b9aeb44e744fa35cd7007c71d4a211264c6b->enter($__internal_e75775cd074bd2539001606997b3b9aeb44e744fa35cd7007c71d4a211264c6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_8c490568a1c44ec7db89af158f19fb1bd995af70dc8a351e6eab3d7d0cf53907->leave($__internal_8c490568a1c44ec7db89af158f19fb1bd995af70dc8a351e6eab3d7d0cf53907_prof);

        
        $__internal_e75775cd074bd2539001606997b3b9aeb44e744fa35cd7007c71d4a211264c6b->leave($__internal_e75775cd074bd2539001606997b3b9aeb44e744fa35cd7007c71d4a211264c6b_prof);

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
", "TwigBundle:Exception:exception.js.twig", "/Users/Rachid/SymfonyProjects/esagdiplome/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
