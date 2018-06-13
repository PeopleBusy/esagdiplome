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
        $__internal_541e15e93678566dee4662dad0d53c1c78fc085b201389bc347cd2fd549be337 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_541e15e93678566dee4662dad0d53c1c78fc085b201389bc347cd2fd549be337->enter($__internal_541e15e93678566dee4662dad0d53c1c78fc085b201389bc347cd2fd549be337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_50d5782cdfe38bf89309318bb60361a1714315f133ff26f38ec8a7c34cd4b513 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50d5782cdfe38bf89309318bb60361a1714315f133ff26f38ec8a7c34cd4b513->enter($__internal_50d5782cdfe38bf89309318bb60361a1714315f133ff26f38ec8a7c34cd4b513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_541e15e93678566dee4662dad0d53c1c78fc085b201389bc347cd2fd549be337->leave($__internal_541e15e93678566dee4662dad0d53c1c78fc085b201389bc347cd2fd549be337_prof);

        
        $__internal_50d5782cdfe38bf89309318bb60361a1714315f133ff26f38ec8a7c34cd4b513->leave($__internal_50d5782cdfe38bf89309318bb60361a1714315f133ff26f38ec8a7c34cd4b513_prof);

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
", "@Framework/Form/radio_widget.html.php", "/Users/Rachid/Documents/Projet Client/ulimprime/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
