<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_922dc58b5e036833353390392f226bf0d4df94581cd9f1e0e50d13d5ca7f808f extends Twig_Template
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
        $__internal_cd7ee5e68df5c1f7bfe738db3dccfe4fe06da0b6623dd86554046211921a1c17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd7ee5e68df5c1f7bfe738db3dccfe4fe06da0b6623dd86554046211921a1c17->enter($__internal_cd7ee5e68df5c1f7bfe738db3dccfe4fe06da0b6623dd86554046211921a1c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_11f597074d6a76eb03bb76b88b2d4bab63b465af391a1d99f2cba1ab96dbb525 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11f597074d6a76eb03bb76b88b2d4bab63b465af391a1d99f2cba1ab96dbb525->enter($__internal_11f597074d6a76eb03bb76b88b2d4bab63b465af391a1d99f2cba1ab96dbb525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_cd7ee5e68df5c1f7bfe738db3dccfe4fe06da0b6623dd86554046211921a1c17->leave($__internal_cd7ee5e68df5c1f7bfe738db3dccfe4fe06da0b6623dd86554046211921a1c17_prof);

        
        $__internal_11f597074d6a76eb03bb76b88b2d4bab63b465af391a1d99f2cba1ab96dbb525->leave($__internal_11f597074d6a76eb03bb76b88b2d4bab63b465af391a1d99f2cba1ab96dbb525_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/Users/Rachid/SymfonyProjects/esagdiplome/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
