<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_2def8fb200b4ce5441b1dcf1fa9c30401d222546f7c1850ed4735a3444aa93f6 extends Twig_Template
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
        $__internal_516e6f4bb1b0eea0740ab44dfe478618be8b39876d41029938e8b5cfc8a2941e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_516e6f4bb1b0eea0740ab44dfe478618be8b39876d41029938e8b5cfc8a2941e->enter($__internal_516e6f4bb1b0eea0740ab44dfe478618be8b39876d41029938e8b5cfc8a2941e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_3adfffae57aea9781b9ca877f3cbabd166bfa2d830e2658b10aad856b7c88401 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3adfffae57aea9781b9ca877f3cbabd166bfa2d830e2658b10aad856b7c88401->enter($__internal_3adfffae57aea9781b9ca877f3cbabd166bfa2d830e2658b10aad856b7c88401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_516e6f4bb1b0eea0740ab44dfe478618be8b39876d41029938e8b5cfc8a2941e->leave($__internal_516e6f4bb1b0eea0740ab44dfe478618be8b39876d41029938e8b5cfc8a2941e_prof);

        
        $__internal_3adfffae57aea9781b9ca877f3cbabd166bfa2d830e2658b10aad856b7c88401->leave($__internal_3adfffae57aea9781b9ca877f3cbabd166bfa2d830e2658b10aad856b7c88401_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/Users/Rachid/SymfonyProjects/esagdiplome/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
