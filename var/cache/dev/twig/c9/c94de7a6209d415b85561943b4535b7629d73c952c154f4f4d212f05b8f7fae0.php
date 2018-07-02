<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_9433201755788dd11962cf779cbda83058b6dbda5344320ea26f256aa85ca550 extends Twig_Template
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
        $__internal_aa62f19e94675d1049149dfbcd91a8beeae118895809488bb042a4c7bb197021 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa62f19e94675d1049149dfbcd91a8beeae118895809488bb042a4c7bb197021->enter($__internal_aa62f19e94675d1049149dfbcd91a8beeae118895809488bb042a4c7bb197021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_a281a03b121ae18fb060215303471bd24d0798db2892c404bfc4feb80653a7c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a281a03b121ae18fb060215303471bd24d0798db2892c404bfc4feb80653a7c7->enter($__internal_a281a03b121ae18fb060215303471bd24d0798db2892c404bfc4feb80653a7c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_aa62f19e94675d1049149dfbcd91a8beeae118895809488bb042a4c7bb197021->leave($__internal_aa62f19e94675d1049149dfbcd91a8beeae118895809488bb042a4c7bb197021_prof);

        
        $__internal_a281a03b121ae18fb060215303471bd24d0798db2892c404bfc4feb80653a7c7->leave($__internal_a281a03b121ae18fb060215303471bd24d0798db2892c404bfc4feb80653a7c7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Users/Rachid/SymfonyProjects/esagdiplome/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
