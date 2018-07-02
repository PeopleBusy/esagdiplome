<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_6800a6840dc43dc6d4ff9f128a3911935bc27e3942ae8de2491a4846539ceb8c extends Twig_Template
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
        $__internal_f6a66ed8dc8710007dec07b8716eb2202049bb4421f265128e71f0fe3acee646 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6a66ed8dc8710007dec07b8716eb2202049bb4421f265128e71f0fe3acee646->enter($__internal_f6a66ed8dc8710007dec07b8716eb2202049bb4421f265128e71f0fe3acee646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_f2cf53cc104b74d102680c2d97fbb6a8f748bb7cf866a153b57e5c577361a453 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2cf53cc104b74d102680c2d97fbb6a8f748bb7cf866a153b57e5c577361a453->enter($__internal_f2cf53cc104b74d102680c2d97fbb6a8f748bb7cf866a153b57e5c577361a453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_f6a66ed8dc8710007dec07b8716eb2202049bb4421f265128e71f0fe3acee646->leave($__internal_f6a66ed8dc8710007dec07b8716eb2202049bb4421f265128e71f0fe3acee646_prof);

        
        $__internal_f2cf53cc104b74d102680c2d97fbb6a8f748bb7cf866a153b57e5c577361a453->leave($__internal_f2cf53cc104b74d102680c2d97fbb6a8f748bb7cf866a153b57e5c577361a453_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/Users/Rachid/SymfonyProjects/esagdiplome/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
