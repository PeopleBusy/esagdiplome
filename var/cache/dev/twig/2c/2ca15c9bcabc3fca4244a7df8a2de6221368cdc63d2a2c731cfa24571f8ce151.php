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
        $__internal_4df710bef839e96149a99b8cc9c057c1edf30e8315f4d8c4752b9ad410b400db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4df710bef839e96149a99b8cc9c057c1edf30e8315f4d8c4752b9ad410b400db->enter($__internal_4df710bef839e96149a99b8cc9c057c1edf30e8315f4d8c4752b9ad410b400db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_da9227d46c68a4ad6ced9b62f5208ff8bdf763624591bb8c084933704593cdfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da9227d46c68a4ad6ced9b62f5208ff8bdf763624591bb8c084933704593cdfe->enter($__internal_da9227d46c68a4ad6ced9b62f5208ff8bdf763624591bb8c084933704593cdfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

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
        
        $__internal_4df710bef839e96149a99b8cc9c057c1edf30e8315f4d8c4752b9ad410b400db->leave($__internal_4df710bef839e96149a99b8cc9c057c1edf30e8315f4d8c4752b9ad410b400db_prof);

        
        $__internal_da9227d46c68a4ad6ced9b62f5208ff8bdf763624591bb8c084933704593cdfe->leave($__internal_da9227d46c68a4ad6ced9b62f5208ff8bdf763624591bb8c084933704593cdfe_prof);

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
", "TwigBundle:Exception:traces.xml.twig", "/Users/Rachid/Documents/Projet Client/ulimprime/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
