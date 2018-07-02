<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_4d7fd10f69a1bfb994ca0ca60b4f238ec8a278e96d5d9c1a10477f7bc2da8789 extends Twig_Template
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
        $__internal_3ba41a42ec01e5037ee1837a5cd2f3c8cafab3a62f07d962c554c9f94ed27e0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ba41a42ec01e5037ee1837a5cd2f3c8cafab3a62f07d962c554c9f94ed27e0e->enter($__internal_3ba41a42ec01e5037ee1837a5cd2f3c8cafab3a62f07d962c554c9f94ed27e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_5526a09fc3202a7e212e469b4e991a5e4236af02d0251f04ef2d3bdeb6937b7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5526a09fc3202a7e212e469b4e991a5e4236af02d0251f04ef2d3bdeb6937b7c->enter($__internal_5526a09fc3202a7e212e469b4e991a5e4236af02d0251f04ef2d3bdeb6937b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_3ba41a42ec01e5037ee1837a5cd2f3c8cafab3a62f07d962c554c9f94ed27e0e->leave($__internal_3ba41a42ec01e5037ee1837a5cd2f3c8cafab3a62f07d962c554c9f94ed27e0e_prof);

        
        $__internal_5526a09fc3202a7e212e469b4e991a5e4236af02d0251f04ef2d3bdeb6937b7c->leave($__internal_5526a09fc3202a7e212e469b4e991a5e4236af02d0251f04ef2d3bdeb6937b7c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/Users/Rachid/SymfonyProjects/esagdiplome/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
