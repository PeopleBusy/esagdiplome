<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_3493af3fc756179f7f6a6e5d68ec04c96d7ea04c3713f8665a1163029b5a11ba extends Twig_Template
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
        $__internal_989e806bc46462e25cea613e9ec36b53f01b29c8c3eea51754c2e358e4430bd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_989e806bc46462e25cea613e9ec36b53f01b29c8c3eea51754c2e358e4430bd5->enter($__internal_989e806bc46462e25cea613e9ec36b53f01b29c8c3eea51754c2e358e4430bd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_8789b3c2569ea7a6c01398e30a83780d00283de53dfbfc044fff813a4ff277ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8789b3c2569ea7a6c01398e30a83780d00283de53dfbfc044fff813a4ff277ad->enter($__internal_8789b3c2569ea7a6c01398e30a83780d00283de53dfbfc044fff813a4ff277ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_989e806bc46462e25cea613e9ec36b53f01b29c8c3eea51754c2e358e4430bd5->leave($__internal_989e806bc46462e25cea613e9ec36b53f01b29c8c3eea51754c2e358e4430bd5_prof);

        
        $__internal_8789b3c2569ea7a6c01398e30a83780d00283de53dfbfc044fff813a4ff277ad->leave($__internal_8789b3c2569ea7a6c01398e30a83780d00283de53dfbfc044fff813a4ff277ad_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "/Users/Rachid/Documents/Projet Client/ulimprime/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
