<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_dd7144d71c9113c0d7502bc393816e5493eae9d9489021428907dc7189fa399a extends Twig_Template
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
        $__internal_4ddab974e1629763c4c4eddc3df6a5ced9c519a137145ebf347d1289a26dc662 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ddab974e1629763c4c4eddc3df6a5ced9c519a137145ebf347d1289a26dc662->enter($__internal_4ddab974e1629763c4c4eddc3df6a5ced9c519a137145ebf347d1289a26dc662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_267fc25834e34978c732541a002f1fb421b42bd5778018cfe459ae41549df136 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_267fc25834e34978c732541a002f1fb421b42bd5778018cfe459ae41549df136->enter($__internal_267fc25834e34978c732541a002f1fb421b42bd5778018cfe459ae41549df136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_4ddab974e1629763c4c4eddc3df6a5ced9c519a137145ebf347d1289a26dc662->leave($__internal_4ddab974e1629763c4c4eddc3df6a5ced9c519a137145ebf347d1289a26dc662_prof);

        
        $__internal_267fc25834e34978c732541a002f1fb421b42bd5778018cfe459ae41549df136->leave($__internal_267fc25834e34978c732541a002f1fb421b42bd5778018cfe459ae41549df136_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Users/Rachid/SymfonyProjects/esagdiplome/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
