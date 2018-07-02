<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_fcffe5d8c8ed1cfa381e3dd3a852bd47bd2a45710ab8e26fa9db2821d5b17f03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be400782b76f83fed644fa806f7bf10c2b71054fc1da0797eb1dc0929eadcb3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be400782b76f83fed644fa806f7bf10c2b71054fc1da0797eb1dc0929eadcb3c->enter($__internal_be400782b76f83fed644fa806f7bf10c2b71054fc1da0797eb1dc0929eadcb3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_88bfc169f415633f57fa8f3e51ea2aa520d18fbebd790dbadc0366c96e316d81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88bfc169f415633f57fa8f3e51ea2aa520d18fbebd790dbadc0366c96e316d81->enter($__internal_88bfc169f415633f57fa8f3e51ea2aa520d18fbebd790dbadc0366c96e316d81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_be400782b76f83fed644fa806f7bf10c2b71054fc1da0797eb1dc0929eadcb3c->leave($__internal_be400782b76f83fed644fa806f7bf10c2b71054fc1da0797eb1dc0929eadcb3c_prof);

        
        $__internal_88bfc169f415633f57fa8f3e51ea2aa520d18fbebd790dbadc0366c96e316d81->leave($__internal_88bfc169f415633f57fa8f3e51ea2aa520d18fbebd790dbadc0366c96e316d81_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_cdcaefb282c2af7c1c2f03e5a1b1c15e6e0dff6350a47b0d3f294ec25512232f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdcaefb282c2af7c1c2f03e5a1b1c15e6e0dff6350a47b0d3f294ec25512232f->enter($__internal_cdcaefb282c2af7c1c2f03e5a1b1c15e6e0dff6350a47b0d3f294ec25512232f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1490d5dddec5aa399e4ab0fbc328fceb7711df0dcc84ebdbf58334053380c5d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1490d5dddec5aa399e4ab0fbc328fceb7711df0dcc84ebdbf58334053380c5d6->enter($__internal_1490d5dddec5aa399e4ab0fbc328fceb7711df0dcc84ebdbf58334053380c5d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_1490d5dddec5aa399e4ab0fbc328fceb7711df0dcc84ebdbf58334053380c5d6->leave($__internal_1490d5dddec5aa399e4ab0fbc328fceb7711df0dcc84ebdbf58334053380c5d6_prof);

        
        $__internal_cdcaefb282c2af7c1c2f03e5a1b1c15e6e0dff6350a47b0d3f294ec25512232f->leave($__internal_cdcaefb282c2af7c1c2f03e5a1b1c15e6e0dff6350a47b0d3f294ec25512232f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Users/Rachid/SymfonyProjects/esagdiplome/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
