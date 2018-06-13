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
        $__internal_6104fc086d76cddc0d153ca11da24df437c55158e8d4f6be6a273cd019f8dd31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6104fc086d76cddc0d153ca11da24df437c55158e8d4f6be6a273cd019f8dd31->enter($__internal_6104fc086d76cddc0d153ca11da24df437c55158e8d4f6be6a273cd019f8dd31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_217de744af0a7828d4ed2797e2705e50ebd64691958f9422c87914025fb4e8aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_217de744af0a7828d4ed2797e2705e50ebd64691958f9422c87914025fb4e8aa->enter($__internal_217de744af0a7828d4ed2797e2705e50ebd64691958f9422c87914025fb4e8aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_6104fc086d76cddc0d153ca11da24df437c55158e8d4f6be6a273cd019f8dd31->leave($__internal_6104fc086d76cddc0d153ca11da24df437c55158e8d4f6be6a273cd019f8dd31_prof);

        
        $__internal_217de744af0a7828d4ed2797e2705e50ebd64691958f9422c87914025fb4e8aa->leave($__internal_217de744af0a7828d4ed2797e2705e50ebd64691958f9422c87914025fb4e8aa_prof);

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
", "TwigBundle:Exception:error.css.twig", "/Users/Rachid/Documents/Projet Client/ulimprime/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
