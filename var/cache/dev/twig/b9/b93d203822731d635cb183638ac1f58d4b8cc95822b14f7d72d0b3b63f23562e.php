<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_b5546d210ace54589f76e104271cd2ded7b60294d28c41bb652e33ae5a0ba20b extends Twig_Template
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
        $__internal_6f16584de973691da5445acac269b93970ea04d657e6cd16b9f0787a4d1bd5db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f16584de973691da5445acac269b93970ea04d657e6cd16b9f0787a4d1bd5db->enter($__internal_6f16584de973691da5445acac269b93970ea04d657e6cd16b9f0787a4d1bd5db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_3a5c36c540e1900f36248f7429387f17af2247a5ee171c31c7e212ca92402f56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a5c36c540e1900f36248f7429387f17af2247a5ee171c31c7e212ca92402f56->enter($__internal_3a5c36c540e1900f36248f7429387f17af2247a5ee171c31c7e212ca92402f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_6f16584de973691da5445acac269b93970ea04d657e6cd16b9f0787a4d1bd5db->leave($__internal_6f16584de973691da5445acac269b93970ea04d657e6cd16b9f0787a4d1bd5db_prof);

        
        $__internal_3a5c36c540e1900f36248f7429387f17af2247a5ee171c31c7e212ca92402f56->leave($__internal_3a5c36c540e1900f36248f7429387f17af2247a5ee171c31c7e212ca92402f56_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/Users/Rachid/SymfonyProjects/esagdiplome/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
