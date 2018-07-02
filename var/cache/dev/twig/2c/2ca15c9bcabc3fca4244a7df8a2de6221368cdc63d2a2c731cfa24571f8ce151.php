<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_934f849bae8209bbd0529a11a780ea461470cc6e49ceb03f8c024f987b368e5b extends Twig_Template
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
        $__internal_addc164cd6baef85ee09a0d2f349a662b46d8133bd3e75434441dfcc6990e50b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_addc164cd6baef85ee09a0d2f349a662b46d8133bd3e75434441dfcc6990e50b->enter($__internal_addc164cd6baef85ee09a0d2f349a662b46d8133bd3e75434441dfcc6990e50b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_d948a5863c061208a4359ab54eac0dd51a7396df9ab231f8292b369e5dccfa17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d948a5863c061208a4359ab54eac0dd51a7396df9ab231f8292b369e5dccfa17->enter($__internal_d948a5863c061208a4359ab54eac0dd51a7396df9ab231f8292b369e5dccfa17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_addc164cd6baef85ee09a0d2f349a662b46d8133bd3e75434441dfcc6990e50b->leave($__internal_addc164cd6baef85ee09a0d2f349a662b46d8133bd3e75434441dfcc6990e50b_prof);

        
        $__internal_d948a5863c061208a4359ab54eac0dd51a7396df9ab231f8292b369e5dccfa17->leave($__internal_d948a5863c061208a4359ab54eac0dd51a7396df9ab231f8292b369e5dccfa17_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/Users/Rachid/SymfonyProjects/esagdiplome/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
