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
        $__internal_88a976bf16c4d7be0c68bda12fb29ec981f3e15c6eee8a4d17fa6bc2301203c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88a976bf16c4d7be0c68bda12fb29ec981f3e15c6eee8a4d17fa6bc2301203c4->enter($__internal_88a976bf16c4d7be0c68bda12fb29ec981f3e15c6eee8a4d17fa6bc2301203c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_082f48c28dbbfec8294b693466401a66b43e65f1bd04828aa6f9cd2e9e83080f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_082f48c28dbbfec8294b693466401a66b43e65f1bd04828aa6f9cd2e9e83080f->enter($__internal_082f48c28dbbfec8294b693466401a66b43e65f1bd04828aa6f9cd2e9e83080f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_88a976bf16c4d7be0c68bda12fb29ec981f3e15c6eee8a4d17fa6bc2301203c4->leave($__internal_88a976bf16c4d7be0c68bda12fb29ec981f3e15c6eee8a4d17fa6bc2301203c4_prof);

        
        $__internal_082f48c28dbbfec8294b693466401a66b43e65f1bd04828aa6f9cd2e9e83080f->leave($__internal_082f48c28dbbfec8294b693466401a66b43e65f1bd04828aa6f9cd2e9e83080f_prof);

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
", "@Framework/FormTable/form_row.html.php", "/Users/Rachid/Documents/Projet Client/ulimprime/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
