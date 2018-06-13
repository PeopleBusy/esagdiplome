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
        $__internal_01a548a15008a49a51f6ed016aecaff9d2450b5fe8bd26220a3f19bd0916a278 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01a548a15008a49a51f6ed016aecaff9d2450b5fe8bd26220a3f19bd0916a278->enter($__internal_01a548a15008a49a51f6ed016aecaff9d2450b5fe8bd26220a3f19bd0916a278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_5906e2fa81f88b593186e077b4d24ae47533976bcaa419304b628ac849fe6750 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5906e2fa81f88b593186e077b4d24ae47533976bcaa419304b628ac849fe6750->enter($__internal_5906e2fa81f88b593186e077b4d24ae47533976bcaa419304b628ac849fe6750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_01a548a15008a49a51f6ed016aecaff9d2450b5fe8bd26220a3f19bd0916a278->leave($__internal_01a548a15008a49a51f6ed016aecaff9d2450b5fe8bd26220a3f19bd0916a278_prof);

        
        $__internal_5906e2fa81f88b593186e077b4d24ae47533976bcaa419304b628ac849fe6750->leave($__internal_5906e2fa81f88b593186e077b4d24ae47533976bcaa419304b628ac849fe6750_prof);

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
", "TwigBundle:Exception:error.atom.twig", "/Users/Rachid/Documents/Projet Client/ulimprime/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
