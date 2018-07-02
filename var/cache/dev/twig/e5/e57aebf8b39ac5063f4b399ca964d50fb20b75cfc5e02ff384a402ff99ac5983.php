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
        $__internal_6509fc78ee30e9c2b15d7d94226b1a6f08a01bc40af819467fd2ed5d9e097327 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6509fc78ee30e9c2b15d7d94226b1a6f08a01bc40af819467fd2ed5d9e097327->enter($__internal_6509fc78ee30e9c2b15d7d94226b1a6f08a01bc40af819467fd2ed5d9e097327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_7b59943224cc9e9636222bf1288389eefbee6fb50295555e212774027889b56e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b59943224cc9e9636222bf1288389eefbee6fb50295555e212774027889b56e->enter($__internal_7b59943224cc9e9636222bf1288389eefbee6fb50295555e212774027889b56e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_6509fc78ee30e9c2b15d7d94226b1a6f08a01bc40af819467fd2ed5d9e097327->leave($__internal_6509fc78ee30e9c2b15d7d94226b1a6f08a01bc40af819467fd2ed5d9e097327_prof);

        
        $__internal_7b59943224cc9e9636222bf1288389eefbee6fb50295555e212774027889b56e->leave($__internal_7b59943224cc9e9636222bf1288389eefbee6fb50295555e212774027889b56e_prof);

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
", "TwigBundle:Exception:exception.json.twig", "/Users/Rachid/SymfonyProjects/esagdiplome/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
