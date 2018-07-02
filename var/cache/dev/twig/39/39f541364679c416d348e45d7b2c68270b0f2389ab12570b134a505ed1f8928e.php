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
        $__internal_93983d50a888567e38a97432cf541a9cabf74a24e089e0b7532d7b6cb91f6eac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93983d50a888567e38a97432cf541a9cabf74a24e089e0b7532d7b6cb91f6eac->enter($__internal_93983d50a888567e38a97432cf541a9cabf74a24e089e0b7532d7b6cb91f6eac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_b8ae71fe75fb188569df224e160185e3fabb8f61293e45b1f80430017fe8b354 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8ae71fe75fb188569df224e160185e3fabb8f61293e45b1f80430017fe8b354->enter($__internal_b8ae71fe75fb188569df224e160185e3fabb8f61293e45b1f80430017fe8b354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_93983d50a888567e38a97432cf541a9cabf74a24e089e0b7532d7b6cb91f6eac->leave($__internal_93983d50a888567e38a97432cf541a9cabf74a24e089e0b7532d7b6cb91f6eac_prof);

        
        $__internal_b8ae71fe75fb188569df224e160185e3fabb8f61293e45b1f80430017fe8b354->leave($__internal_b8ae71fe75fb188569df224e160185e3fabb8f61293e45b1f80430017fe8b354_prof);

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
", "@Framework/Form/form_widget_compound.html.php", "/Users/Rachid/SymfonyProjects/esagdiplome/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
