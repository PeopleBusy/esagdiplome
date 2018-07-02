<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_7469a7b2b60695e7a08300e38d4f4dfed879b63da8282b8d585b084fa96ed697 extends Twig_Template
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
        $__internal_252feab4f12ae39ba27476204590f05e31bb932373f85553d9640a940751b007 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_252feab4f12ae39ba27476204590f05e31bb932373f85553d9640a940751b007->enter($__internal_252feab4f12ae39ba27476204590f05e31bb932373f85553d9640a940751b007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_51cf222b493be2c5346ca02a5eb5c920f80a810d60df508241a18ea10e3e1364 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51cf222b493be2c5346ca02a5eb5c920f80a810d60df508241a18ea10e3e1364->enter($__internal_51cf222b493be2c5346ca02a5eb5c920f80a810d60df508241a18ea10e3e1364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_252feab4f12ae39ba27476204590f05e31bb932373f85553d9640a940751b007->leave($__internal_252feab4f12ae39ba27476204590f05e31bb932373f85553d9640a940751b007_prof);

        
        $__internal_51cf222b493be2c5346ca02a5eb5c920f80a810d60df508241a18ea10e3e1364->leave($__internal_51cf222b493be2c5346ca02a5eb5c920f80a810d60df508241a18ea10e3e1364_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Users/Rachid/SymfonyProjects/esagdiplome/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
