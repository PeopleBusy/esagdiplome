<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_454420bf5d207588adcc7d50ccb775ad1f0570ccd67d68e083c1ad0df1fb7c29 extends Twig_Template
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
        $__internal_b954135cc9a92facdb1a309e96ce75206dd6751354709061c20adcd335bd1e6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b954135cc9a92facdb1a309e96ce75206dd6751354709061c20adcd335bd1e6b->enter($__internal_b954135cc9a92facdb1a309e96ce75206dd6751354709061c20adcd335bd1e6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_4d79bc1af8fb1ed11db853309cda193fd5a3520da26009b6260511f73b4453a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d79bc1af8fb1ed11db853309cda193fd5a3520da26009b6260511f73b4453a6->enter($__internal_4d79bc1af8fb1ed11db853309cda193fd5a3520da26009b6260511f73b4453a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_b954135cc9a92facdb1a309e96ce75206dd6751354709061c20adcd335bd1e6b->leave($__internal_b954135cc9a92facdb1a309e96ce75206dd6751354709061c20adcd335bd1e6b_prof);

        
        $__internal_4d79bc1af8fb1ed11db853309cda193fd5a3520da26009b6260511f73b4453a6->leave($__internal_4d79bc1af8fb1ed11db853309cda193fd5a3520da26009b6260511f73b4453a6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/Users/Rachid/SymfonyProjects/esagdiplome/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
