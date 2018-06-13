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
        $__internal_85afee66e08bd3d9003a1efc900240f3ad118cb95a5440d26de8559a054d442a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85afee66e08bd3d9003a1efc900240f3ad118cb95a5440d26de8559a054d442a->enter($__internal_85afee66e08bd3d9003a1efc900240f3ad118cb95a5440d26de8559a054d442a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_7c7b2a72e922b977f7e4d15362743bcbb057eef927a2a13b24af2f22ce372786 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c7b2a72e922b977f7e4d15362743bcbb057eef927a2a13b24af2f22ce372786->enter($__internal_7c7b2a72e922b977f7e4d15362743bcbb057eef927a2a13b24af2f22ce372786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_85afee66e08bd3d9003a1efc900240f3ad118cb95a5440d26de8559a054d442a->leave($__internal_85afee66e08bd3d9003a1efc900240f3ad118cb95a5440d26de8559a054d442a_prof);

        
        $__internal_7c7b2a72e922b977f7e4d15362743bcbb057eef927a2a13b24af2f22ce372786->leave($__internal_7c7b2a72e922b977f7e4d15362743bcbb057eef927a2a13b24af2f22ce372786_prof);

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
", "@Framework/FormTable/form_widget_compound.html.php", "/Users/Rachid/Documents/Projet Client/ulimprime/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
