<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_c068ab26fc417f11148e4ed5163abb4d5235b3518a968d8408d803582a2ce131 extends Twig_Template
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
        $__internal_bc543b5edb2c983b6b173a15d36242f3b72ab91ac6a7c11659574feca92cfdaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc543b5edb2c983b6b173a15d36242f3b72ab91ac6a7c11659574feca92cfdaf->enter($__internal_bc543b5edb2c983b6b173a15d36242f3b72ab91ac6a7c11659574feca92cfdaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_37a560663e61e9c7e40dd02caf2bde4901d3d6c25fff803c98db82eaa6797cb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37a560663e61e9c7e40dd02caf2bde4901d3d6c25fff803c98db82eaa6797cb1->enter($__internal_37a560663e61e9c7e40dd02caf2bde4901d3d6c25fff803c98db82eaa6797cb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_bc543b5edb2c983b6b173a15d36242f3b72ab91ac6a7c11659574feca92cfdaf->leave($__internal_bc543b5edb2c983b6b173a15d36242f3b72ab91ac6a7c11659574feca92cfdaf_prof);

        
        $__internal_37a560663e61e9c7e40dd02caf2bde4901d3d6c25fff803c98db82eaa6797cb1->leave($__internal_37a560663e61e9c7e40dd02caf2bde4901d3d6c25fff803c98db82eaa6797cb1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/Users/Rachid/Documents/Projet Client/ulimprime/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
