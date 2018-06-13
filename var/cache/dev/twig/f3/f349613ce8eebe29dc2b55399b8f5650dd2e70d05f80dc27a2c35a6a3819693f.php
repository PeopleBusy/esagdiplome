<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_f488227bc8c4ec1f865cb7df715ad99eb36d5675f45bdc9473769783ba3fbfe4 extends Twig_Template
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
        $__internal_e00b91578941dae31c1dcd94cebeb2816854e26b4ae3d234f50e2a8cc26e9747 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e00b91578941dae31c1dcd94cebeb2816854e26b4ae3d234f50e2a8cc26e9747->enter($__internal_e00b91578941dae31c1dcd94cebeb2816854e26b4ae3d234f50e2a8cc26e9747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_938d2385f9daa90fd9dbbf127413d81924cb9e61efea57d587900e71c5c7de0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_938d2385f9daa90fd9dbbf127413d81924cb9e61efea57d587900e71c5c7de0a->enter($__internal_938d2385f9daa90fd9dbbf127413d81924cb9e61efea57d587900e71c5c7de0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_e00b91578941dae31c1dcd94cebeb2816854e26b4ae3d234f50e2a8cc26e9747->leave($__internal_e00b91578941dae31c1dcd94cebeb2816854e26b4ae3d234f50e2a8cc26e9747_prof);

        
        $__internal_938d2385f9daa90fd9dbbf127413d81924cb9e61efea57d587900e71c5c7de0a->leave($__internal_938d2385f9daa90fd9dbbf127413d81924cb9e61efea57d587900e71c5c7de0a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/Users/Rachid/Documents/Projet Client/ulimprime/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
