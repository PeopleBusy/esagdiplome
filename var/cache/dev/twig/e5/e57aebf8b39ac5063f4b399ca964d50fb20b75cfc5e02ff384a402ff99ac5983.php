<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_910efb06435b074bf90198d80975cbe32016c983cc9d7c74c1aed6bc596fb9d2 extends Twig_Template
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
        $__internal_364abe97ff02e95925dc62e4b114507d89c9214a2fdb0879c24684f629b69db2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_364abe97ff02e95925dc62e4b114507d89c9214a2fdb0879c24684f629b69db2->enter($__internal_364abe97ff02e95925dc62e4b114507d89c9214a2fdb0879c24684f629b69db2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_c08c123457caad73012ad7b23d875dc18d0c1efed6d5750d8649b0b97eb586a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c08c123457caad73012ad7b23d875dc18d0c1efed6d5750d8649b0b97eb586a4->enter($__internal_c08c123457caad73012ad7b23d875dc18d0c1efed6d5750d8649b0b97eb586a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_364abe97ff02e95925dc62e4b114507d89c9214a2fdb0879c24684f629b69db2->leave($__internal_364abe97ff02e95925dc62e4b114507d89c9214a2fdb0879c24684f629b69db2_prof);

        
        $__internal_c08c123457caad73012ad7b23d875dc18d0c1efed6d5750d8649b0b97eb586a4->leave($__internal_c08c123457caad73012ad7b23d875dc18d0c1efed6d5750d8649b0b97eb586a4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/Users/Rachid/Documents/Projet Client/ulimprime/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
