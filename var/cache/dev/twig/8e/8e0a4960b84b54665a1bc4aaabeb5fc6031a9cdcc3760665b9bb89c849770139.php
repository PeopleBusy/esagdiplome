<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_1c4c5743c2285a9e88aa799bc37e2fd78b8b44a7e6b224169a8d9ff75589a03a extends Twig_Template
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
        $__internal_430f15a8c8e28f486dad39398af8b3045fb5449c6b9a49814431c2061150b111 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_430f15a8c8e28f486dad39398af8b3045fb5449c6b9a49814431c2061150b111->enter($__internal_430f15a8c8e28f486dad39398af8b3045fb5449c6b9a49814431c2061150b111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_d1498edbba7973dc13312c9d7f8215ed5bae483986ff53eb18d79d58f38ca076 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1498edbba7973dc13312c9d7f8215ed5bae483986ff53eb18d79d58f38ca076->enter($__internal_d1498edbba7973dc13312c9d7f8215ed5bae483986ff53eb18d79d58f38ca076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_430f15a8c8e28f486dad39398af8b3045fb5449c6b9a49814431c2061150b111->leave($__internal_430f15a8c8e28f486dad39398af8b3045fb5449c6b9a49814431c2061150b111_prof);

        
        $__internal_d1498edbba7973dc13312c9d7f8215ed5bae483986ff53eb18d79d58f38ca076->leave($__internal_d1498edbba7973dc13312c9d7f8215ed5bae483986ff53eb18d79d58f38ca076_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/Users/Rachid/Documents/Projet Client/ulimprime/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
