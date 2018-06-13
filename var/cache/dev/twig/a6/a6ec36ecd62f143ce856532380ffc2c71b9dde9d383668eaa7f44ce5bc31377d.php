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
        $__internal_0faac043839838ba0b85cdd0bb9da7cffb93c0e4a2b2f91c47ded6db9438e1b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0faac043839838ba0b85cdd0bb9da7cffb93c0e4a2b2f91c47ded6db9438e1b2->enter($__internal_0faac043839838ba0b85cdd0bb9da7cffb93c0e4a2b2f91c47ded6db9438e1b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_28ca267fb4472fe1c003e07778f597725de2344371a8b47ce8485d7ab1d36932 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28ca267fb4472fe1c003e07778f597725de2344371a8b47ce8485d7ab1d36932->enter($__internal_28ca267fb4472fe1c003e07778f597725de2344371a8b47ce8485d7ab1d36932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_0faac043839838ba0b85cdd0bb9da7cffb93c0e4a2b2f91c47ded6db9438e1b2->leave($__internal_0faac043839838ba0b85cdd0bb9da7cffb93c0e4a2b2f91c47ded6db9438e1b2_prof);

        
        $__internal_28ca267fb4472fe1c003e07778f597725de2344371a8b47ce8485d7ab1d36932->leave($__internal_28ca267fb4472fe1c003e07778f597725de2344371a8b47ce8485d7ab1d36932_prof);

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
", "@Framework/Form/percent_widget.html.php", "/Users/Rachid/Documents/Projet Client/ulimprime/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
